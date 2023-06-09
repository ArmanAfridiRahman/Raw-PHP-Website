<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?php echo $entity['image'];?>" alt="" class="w-100">

                </div>
                <div class="col-lg-7">
                    <h1 class="text-start text-white"><?php echo $entity['name'];?></h1>
                    <p class="text-start text-white mt-3"><?php echo $entity['short_description'];?></p>
                    <p class="text-start text-white"><?php echo $entity['description'];?></p>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>
