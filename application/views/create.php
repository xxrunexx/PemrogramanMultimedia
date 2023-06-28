<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h6><?= validation_errors(); ?></h6>
<h6><?= $this->session->flashdata('error'); ?></h6>

  <div class="row">
    <form action="<?= site_url('welcome/create'); ?>" method="post" enctype="multipart/form-data" class="col s12"> <!-- Set Site_url menjadi welcome/create dengan method post -->
      <div class="row">
        <div class="input-field col s12"> <!-- Input field untuk name -->
          <input name="name" id="name" type="text" class="validate"> <!-- name yang diisi dengan inputan name dari form -->
          <label for="name">Name</label> <!-- Label untuk name -->
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12"> <!-- Input field untuk description -->
          <textarea name="description" id="description" class="materialize-textarea"></textarea> <!-- description yang diisi dengan inputan description dari form -->
          <label for="description">Description</label> <!-- Label untuk description -->
        </div>
      </div>
      <div class="file-field input-field"> <!-- Input field untuk image -->
        <div class="btn light-blue darken-4">
          <span>Select File</span>
          <input type="file" name="image1" accept=".jpg,.png,.jpeg"> <!-- image1 yang diisi dengan inputan image1 dari form. File dibatasi hanya untuk format jpg, png, dan jpeg -->
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text"> <!-- File path untuk image -->
        </div>
      </div>
      <div class="row center">
        <div class="input-field col s12">
          <button type="submit" class="btn light-blue darken-4">Create</button> <!-- Button submit untuk create -->
        </div>
      </div>
    </form>
  </div>