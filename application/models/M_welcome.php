<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model { // Class Turunan dari CI_Model
    public function create($id, $filename){
		$data = array(
			'id'=>$id, // id yang diisi dengan parameter $id
			'name'=>$this->input->post('name', TRUE), // name yang diisi dengan inputan name dari form
			'description'=>$this->input->post('description', TRUE), // description yang diisi dengan inputan description dari form
			'filename'=>$filename // filename yang diisi dengan variabel $filename
		);
		$this->db->insert('post', $data); // Memasukkan data ke tabel post
        
	}

	public function read($id=FALSE){
		if ($id==FALSE) {
			return $this->db->get('post')->result_array(); // Menampilkan semua data dari tabel post
		} else {
			$query = $this->db->get_where('post', array('id'=>$id)); // Menampilkan data dari tabel post berdasarkan id
			return $query->row(); // Return hasil query
		}
	}

	public function update($id){ // Parameter untuk menerima data id
		$data = array(
			'name'=>$this->input->post('name', TRUE), // name yang diisi dengan inputan name dari form
			'description'=>$this->input->post('description', TRUE), // description yang diisi dengan inputan description dari form
		);
		$this->db->where('id', $id); // Mengupdate data berdasarkan id
		$this->db->update('post', $data); // Mengupdate data ke tabel post
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('post');
	}

	public function deleteAll(){
		$this->db->empty_table('post');
	}
}
