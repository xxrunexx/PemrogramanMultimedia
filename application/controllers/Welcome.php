<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_welcome', 'model'); // Load model M_welcome ke controller
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    public function index($id=False) // Membuat session dengan default parameter False
    {
        if ($id===FALSE) {
			$data['home_post'] = $this->model->read(); // Memanggil fungsi read() untuk menampilkan semua data
			$this->load->view('header');
			$this->load->view('home', $data);
			$this->load->view('footer');
		} else { // Jika kita memilih salah satu item
			$data['post'] = $this->model->read($id); // Maka Memanggil fungsi read() untuk menampilkan data dari id yang dipilih tersebut
			$this->load->view('header');
			$this->load->view('post', $data);
			$this->load->view('footer');
		}
    }

    public function create()
    {
        $this->load->helper('form'); // Memanggil helper form
        $this->load->library('form_validation'); // Untuk Validasi Form

        $this->form_validation->set_rules('name', 'Name', 'required|max_length[30]'); // Validasi Nama required dan max 30 karakter
        $this->form_validation->set_rules('description', 'Description', 'required'); // Validasi Description required

        if ($this->form_validation->run() === false) {
            $this->load->view('header'); // load header section
            $this->load->view('create'); // load create section
            $this->load->view('footer'); // load footer section
        } else {
            $id = uniqid('item', true); // generate id unique

            $config['upload_path'] = 'upload/post'; // Path untuk upload file
            $config['allowed_types'] = 'jpg|png|jpeg'; // Format file yang diizinkan
            $config['max_size'] = '100000'; // Max size file (KB) 
            $config['file_ext_tolower'] = true; // Memaksa format file menjadi lowercase
            $config['file_name'] = str_replace('.', '_', $id); // Nama file yang diupload

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image1')) { // Jika upload gagal
                $this->session->set_flashdata('error', $this->upload->display_errors()); // Menyimpan pesan error ke session
                echo $this->upload->display_errors();
                // redirect('welcome/create');
            } else {
                $filename = $this->upload->data('file_name'); // Menyimpan nama file ke variabel $filename
                $this->model->create($id, $filename); // Memanggil fungsi create() pada model
                redirect(); // Redirect ke halaman utama
            }
        }
    }

	public function update($id)
    {
        $this->load->helper('form'); // Memanggil helper form
        $this->load->library('form_validation'); // Untuk Validasi Form

        $this->form_validation->set_rules('name', 'Name', 'required|max_length[30]'); // Validasi Nama required dan max 30 karakter
        $this->form_validation->set_rules('description', 'Description', 'required'); // Validasi Description required
        $this->form_validation->set_rules('image', 'Image');

        if ($this->form_validation->run() === FALSE) { // Jika validasi gagal
            $data['post'] = $this->model->read($id); // Memanggil fungsi read() untuk menampilkan data dari id yang dipilih tersebut
            $this->load->view('header');
            $this->load->view('update',$data);
            $this->load->view('footer');
        } else { // Jika validasi berhasil  
            $post = $this->model->read($id);
            $config['upload_path'] = "./upload/post";
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = "100000";
            $config['file_ext_tolower'] = TRUE;
            $config['overwrite'] = TRUE;
            $config['file_name'] = $post->filename;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) { // Jika upload gagal
                $config['file_ext_tolower'] = TRUE;
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->model->update($id);
                redirect();
               
            } else {
                $this->model->update($id);
                echo "berhasil";
               redirect();
            }
    } 
}

    public function delete($id){
        $post = $this->model->read($id);
        $this->model->delete($id);
        unlink('./upload/post/'.$post->filename);
        redirect('');
    }
    
    public function deleteAll(){
        $post =$this->model->read();
        foreach($post as $p){
            unlink('./upload/post/'.$p['filename']);
        }
        $this->model->deleteAll();
        redirect('');
    }