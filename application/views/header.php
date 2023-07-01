<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MY ALBUM APPS</title>
        <!-- Favicon-->
       
        <link rel="icon" type="image/x-icon" href="<?= base_url('asset/assets/favicon.ico');?>"/>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v6.3.0/js/all.js' crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('asset/css/styles.css');?>" rel="stylesheet" />
    </head>

    <body id="page-top">
        <header>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href=<?= site_url("")?>>My Album</a>
                    <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" data-bs-toggle="modal" data-bs-target="#portfolioModal1">Create</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

         <!-- Create Modal-->
         <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tambah Foto</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <form action="<?= base_url('welcome/create'); ?>" method="post" enctype="multipart/form-data" class="col s12">
                                            <div class="row justify-content-start mb-4">
                                                <div class="input-field col-sm-12 text-start">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="row">
                                                <input class="form-control" name="name" id="name" type="text" class="validate">
                                                </div>
                                            </div>
                                            <div class="row justify-content-start mb-4">
                                                <div class="input-field col-sm-12 text-start">
                                                <label for="name">Description</label>
                                            </div>
                                            <div class="row">
                                                <input class="form-control" name="description" id="description" type="text" class="validate">
                                                </div>
                                            </div>
                                            
                                            <div class="row justify-content-start mb-4">
                                                <div class="input-field col-sm-12 text-start">
                                                <label for="name">Select File</label>
                                            </div>
                                            <div class="row">
                                                <input class="form-control" type="file" name="image1" accept=".jpg,.png,.jpeg">
                                                </div>
                                            </div>

                                            <div class="row center">
                                                <div class="input-field col s12">
                                                <button type="submit" class="btn btn-success">Create</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>