
<!-- Album Section-->
<section class="page-section portfolio mt-5" id="portfolio">
    <div class="container">
        <!-- Album Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">MY ALBUM</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Album Grid Items-->
        <div class="row justify-content-center">
        <?php foreach ($home_post as $data) :?>
            <!-- Album Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="row justify-content-start">
                <h6><?php echo($data['name'])?></h6>
                </div>
                <div class="portfolio-item mx-auto" >
                <a href="<?=site_url("Welcome/update/".$data['id']) ?>">    
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <div class="row justify-content-center">   
                        <img class="img-fluid h-100 w-100" src="<?=site_url("upload/post/".$data['filename']) ?>" alt="..."/>
                    </div>
                </a>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <?php echo($data['description'])?>  
                    </div>
                    <div class="col-6 text-end">
                        <?php echo($data['date'])?>  
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <div class="row justify-content-center">
            <a type="delete" href="<?php echo site_url('welcome/deleteall'); ?>" class="btn btn-danger light-blue darken-4">Delete All</a>
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-6 ms-auto"><p class="lead">Harun Ar Rasyid(57419474)</p></div>
            <div class="col-lg-6 me-auto"><p class="lead">Hafiz Naufal	Ismail(52419687)</p></div>
            <div class="col-lg-6 me-auto"><p class="lead">Rifki Wafazahran(55419549)</p></div>
            <div class="col-lg-6 me-auto"><p class="lead">Rio Maulana Fathurahman(55419598)</p></div>
        </div>
    </div>
</section>