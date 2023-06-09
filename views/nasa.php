<?php include "header.php";?>
    <section class="py-5" style="background-image: url('assets/img/glaxy.jpg'); background-repeat: no-repeat;">
        <img src="" alt="" class="">
        <div class="container">
            <div class="row">
                <?php foreach($information as $item) {?>
                <div class="col-12 text-center">
                    <img src="<?php echo $item['logo'];?>" alt="" class="w-50 mb-2">
                    <?php }?>
                    <div class="container mt-5 pt-5">
                        <div class="row">
                            <?php foreach($information as $item) {?>
                            <div class="col-lg-5">
                                <h2 class="text-white bg-black bg-opacity-50 p-3 text-start mb-3">
                                    <?php echo $item['name'];?>
                                </h2>
                                <img src=" <?php echo $item['image'];?>" alt="" class="w-100">
                                <p class="text-start text-white mt-5">
                                    <?php echo $item['description'];?>
                                </p>
                            </div>
                            <?php }?>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <h2 class="text-warning mt-4 mt-lg-0 text-start">Latest News</h2>
                                <?php foreach ($news as $item) {?>
                                <a href="action.php?page=companyNasa&id=<?php echo $item['id'];?>" class="text-decoration-none">
                                    <div class="card card-body bg-transparent border-2 border-warning mb-5 mt-5 grow-3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-5 my-auto">
                                                    <img src="<?php echo $item['image']?>" alt="" class="w-100">
                                                </div>
                                                <div class="col-7">
                                                    <h5 class="text-white text-start"><?php echo $item['title']?></h5>
                                                    <hr class="text-warning fs-1"/>
                                                    <p class="text-white text-start"><?php echo $item['short_description']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php include "footer.php";?>