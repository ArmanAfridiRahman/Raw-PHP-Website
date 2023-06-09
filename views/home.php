<?php include "header.php"?>

    <div class="carousel slide carousel-fade" data-mbd-ride="carousel" id="carouselVideo">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video autoplay loop muted class="img-fluid w-100">
                    <source class="" src="assets/videos/animation.mp4" type="video/mp4">
                </video>

                <div class="carousel-caption d-none d-lg-flex flex-column justify-content-center h-100">
                    <h1 class="grow-2 fw-bold text-bg-video-one display-3 mb-5 ">“To the mind that is still, <br/>the whole universe surrenders.“<br/><span class="fs-5 fw-bold pt-0 text-white">- Lao Tzu</span></h1>
                    <p class="grow-2 text-white fs-5 d-none d-xl-block mb-4">Our universe is 13.7 billion years old. All the history originated from a birth of a<br/> star. It is a blessing that we are part of this evolution.</p>
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
        <p class="text-center text-white px-5 mx-5 mb-4">Our universe has many wonders stored within. But the most important wonder is life. From single cell to today life wants to explore and <br/>witness every corner of the sandbox it is in.
                                The people of planet Earth has many plans to take life beyond this planet and hopefully beyond the solar system. Organizations <br/>like SpaceX and NASA are working towards that goal for a very long time...
        </p>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <img src="assets/img/home/about/nasa.png" alt="" class="w-75 mx-5">
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="nasaAccordian">
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#nasaOne" class="w-100 bg-transparent text-white border-0">What is Nasa?</button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="nasaOne" data-bs-parent="#nasaAccordian">
                                        <p class="text-white p-3 fw-light">
                                            NASA stands for National Aeronautics and Space Administration. NASA is a United States government agency that is responsible for science and technology related to air and space. The Space Age started in 1957 with the launch of the Soviet satellite Sputnik. NASA was created in 1958. The agency was created to oversee U.S. space exploration and aeronautics research.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#nasaTwo" class="w-100 bg-transparent text-white border-0">What is Nasa?</button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="nasaTwo" data-bs-parent="#nasaAccordian">
                                        <p class="text-white p-3 fw-light">
                                            NASA stands for National Aeronautics and Space Administration. NASA is a United States government agency that is responsible for science and technology related to air and space. The Space Age started in 1957 with the launch of the Soviet satellite Sputnik. NASA was created in 1958. The agency was created to oversee U.S. space exploration and aeronautics research.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#nasaThree" class="w-100 bg-transparent text-white border-0">What is Nasa?</button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="nasaThree" data-bs-parent="#nasaAccordian">
                                        <p class="text-white p-3 fw-light">
                                            NASA stands for National Aeronautics and Space Administration. NASA is a United States government agency that is responsible for science and technology related to air and space. The Space Age started in 1957 with the launch of the Soviet satellite Sputnik. NASA was created in 1958. The agency was created to oversee U.S. space exploration and aeronautics research.
                                        </p>
                                    </div>
                                </div>

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
                            <div class="carousel-item active ">
                                <img src="assets/img/1.jpg" alt="" class="w-100" height="265"/>
<!--                                <div class="carousel-caption my-caption">-->
<!--                                    <h1>This is caption one</h1>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse iste labore neque officiis, recusandae ullam! Aperiam atque culpa dolor expedita fugiat fugit, impedit ipsum nobis quisquam ratione temporibus vel veniam.</p>-->
<!--                                    <a href="" class="btn btn-success">Read More ..</a>-->
<!--                                </div>-->
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/glaxy.jpg" alt="" class="w-100" height="265"/>

                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/1.jpg" alt="" class="w-100" height="265"/>

                            </div>

                            <div class="carousel-item">
                                <img src="assets/img/glaxy.jpg" alt="" class="w-100" height="265"/>

                            </div>



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
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#spacexOne" class="w-100 bg-transparent text-white border-0">What is SpaceX?</button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="spacexOne" data-bs-parent="#spacexAccordian">
                                        <p class="text-white p-3 fw-light">
                                            The Space Exploration Technologies Corporation, commonly referred to as SpaceX is an American spacecraft manufacturer, launcher, and satellite communications company headquartered in Hawthorne, California. It was founded in 2002 by Elon Musk with the goal of reducing space transportation costs to colonization of Mars.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#spacexTwo" class="w-100 bg-transparent text-white border-0">What is SpaceX?</button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="spacexTwo" data-bs-parent="#spacexAccordian">
                                        <p class="text-white p-3 fw-light">
                                            The Space Exploration Technologies Corporation, commonly referred to as SpaceX is an American spacecraft manufacturer, launcher, and satellite communications company headquartered in Hawthorne, California. It was founded in 2002 by Elon Musk with the goal of reducing space transportation costs to colonization of Mars.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-transparent border-0 rounded-3">
                                    <div class="card-header border-3 border-warning rounded-0 bg-transparent mb-2">
                                        <button type="button" data-bs-toggle="collapse" data-bs-target="#spacexThree" class="w-100 bg-transparent text-white border-0">What is SpaceX?</button>
                                    </div>
                                    <div class="card-body p-0 collapse bg-transparent " id="spacexThree" data-bs-parent="#spacexAccordian">
                                        <p class="text-white p-3 fw-light">
                                            The Space Exploration Technologies Corporation, commonly referred to as SpaceX is an American spacecraft manufacturer, launcher, and satellite communications company headquartered in Hawthorne, California. It was founded in 2002 by Elon Musk with the goal of reducing space transportation costs to colonization of Mars.
                                        </p>
                                    </div>
                                </div>

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
                <div class="col-4">
                    <h4 class="text-start">This Website is being developed by <br/><span class="fw-bold">Arman Afridi Rahman</span></h4>
                </div>
                <div class="col-4 text-center">
                    <a href="https://www.linkedin.com/in/arman-afridi-rahman/" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-linkedin"> | </i></a>
                    <a href="https://github.com/ArmanAfridiRahman" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-square-github"> | </i></a>
                    <a href="https://twitter.com/ArmanAfridiR" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-square-twitter"> | </i></a>
                    <a href="https://www.linkedin.com/in/arman-afridi-rahman/" class="text-decoration-none"><i class="text-black fa-brands fa-2x fa-square-facebook"></i></a>




                </div>
                <div class="col-4">
                    <p class="text-black">This is a demonstration of my php knowledge. Overtime I look forward to improve it. I hope you enjoyed your stay in this website. Thank you for your time and attention.</p>
                </div>


            </div>
        </div>
    </section>

<?php include "footer.php"?>