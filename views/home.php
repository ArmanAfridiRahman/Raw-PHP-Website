<?php include "header.php"?>
    <?php foreach ($homeContents as $homeContent) {?>
    <div class="carousel slide carousel-fade" data-mbd-ride="carousel" id="carouselVideo">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video autoplay loop muted class="img-fluid w-100">
                    <source class="" src="<?php echo $homeContent['video'];?>" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-lg-flex flex-column justify-content-center h-100">
                    <h1 class="grow-2 fw-bold text-bg-video-one display-3 mb-5 "><span class="text-white">“ </span><?php echo $homeContent['video_head'];?><span class="text-white"> “</span><br/><span class="fs-5 fw-bold pt-0 text-white"><?php echo $homeContent['video_head_span'];?></span></h1>
                    <p class="grow-2 text-white fs-5 d-none d-xl-block mb-4"><?php echo $homeContent['video_para'];?></p>
                    <a href="#profileModal" class="text-decoration-none" data-bs-toggle="modal">
                        <button class="btn btn-outline-warning w-25 mx-auto border-3 grow-3  text-white fw-bold"> Explore <span class="text-white fa fa-space-shuttle"></span></button>
                    </a>
                </div>
                <div class="carousel-caption d-none d-sm-flex d-lg-none flex-column justify-content-center h-100">
                    <h1 class="grow-2 fw-bold text-bg-video-one display-5 text-start"><span class="text-white">“ </span>To the mind <br/>that is still, the whole <br/>universe surrenders.<span class="text-white"> “</span><br/><span class=" fw-bold pt-0 text-white fs-6">- Lao Tzu</span></h1>
                    <a href="#profileModal" class="text-decoration-none" data-bs-toggle="modal">
                        <button class="btn btn-outline-warning me-0 mt-3 mx-auto border-2 grow-3  text-white fw-bold">Explore <span class="text-white fa fa-space-shuttle"></span></button>
                    </a>
                </div>

                <div class="carousel-caption d-flex d-sm-none flex-column justify-content-center h-100">
                    <h1 class="grow-2 fw-bold text-bg-video-one text-start"><span class="text-white">“ </span>To the mind <br/>that is still, the whole <br/>universe surrenders.<span class="text-white"> “</span><br/><span class=" fw-bold pt-0 text-white fs-6">- Lao Tzu</span></h1>
                    <a href="#profileModal" class="text-decoration-none" data-bs-toggle="modal">
                        <button class="btn btn-outline-warning me-0 mt-3 mx-auto border-2 grow-3 text-white fw-bold">Explore <span class="text-white fa fa-space-shuttle"></span></button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="py-5 bg-black">
        <h1 class="text-warning text-center mb-5">About</h1>
        <p class="text-center text-white px-5 mb-4">
            <?php echo $homeContent['about_pera'];?>
        </p>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <img src="<?php echo $homeContent['nasa_logo'];?>" alt="" class="w-75 mx-5">
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="nasaAccordian">
                                <?php foreach ($nasa as $item) {?>
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#nasa<?php echo $item['id'];?>" class="w-100 bg-transparent text-white border-0"><?php echo $item['title'];?></button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="nasa<?php echo $item['id'];?>" data-bs-parent="#nasaAccordian">
                                        <p class="text-white p-3 fw-light">
                                            <?php echo $item['answer'];?>
                                        </p>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"> <!-- delete data-bs-ride="carousel" to stop auto moving carousel -->
                        <div class="carousel-indicators">
                            <button data-bs-target="#slider" data-bs-slide-to="0" class="active"> </button>
                            <button data-bs-target="#slider" data-bs-slide-to="1"> </button>
                            <button data-bs-target="#slider" data-bs-slide-to="2"> </button>
                            <button data-bs-target="#slider" data-bs-slide-to="3"> </button>
                        </div>
                        <div class="carousel-inner">
                            <?php foreach ($carousels as $carousel) {?>
                            <div class="carousel-item <?php echo $carousel['active'];?>">
                                <img src="<?php echo $carousel['image'];?>" alt="" class="w-100" height="265"/>
                            </div>
                            <?php }?>
                        </div>

                        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <img src="assets/img/home/about/SpaceX.png" alt="" class="w-100 mx-3">
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="spacexAccordian">
                                <?php foreach ($spacex as $itemSpacex) {?>
                                    <div class="card bg-transparent border-0 rounded-3">
                                        <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                            <button type="button" data-bs-toggle="collapse" data-bs-target="#spacex<?php echo $itemSpacex['id'];?>" class="w-100 bg-transparent text-white border-0"><?php echo $itemSpacex['title'];?></button>
                                        </div>
                                        <div class="card-body p-0 collapse bg-transparent " id="spacex<?php echo $itemSpacex['id'];?>" data-bs-parent="#spacexAccordian">
                                            <p class="text-white p-3 fw-light">
                                                <?php echo $itemSpacex['answer'];?>
                                            </p>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="text-center">This Website is being developed by <br/><span class="fw-bold">Arman Afridi Rahman</span></h4>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <a href="https://www.linkedin.com/in/arman-afridi-rahman/" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-linkedin"> | </i></a>
                    <a href="https://github.com/ArmanAfridiRahman" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-square-github"> | </i></a>
                    <a href="https://twitter.com/ArmanAfridiR" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-square-twitter"> | </i></a>
                    <a href="https://www.linkedin.com/in/arman-afridi-rahman/" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-square-facebook"></i></a>




                </div>
                <div class="col-md-4">
                    <p class="text-black text-center">This is a demonstration of my php knowledge. Overtime I look forward to improve it. I hope you enjoyed your stay in this website. Thank you for your time and attention.</p>
                </div>


            </div>
        </div>
    </section>
    <?php }?>
<?php include "footer.php"?>