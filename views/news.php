<?php include "header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="<?php echo $news['image'];?>" alt="" class="w-100">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card bg-transparent">
                    <div class="card-header">
                        <h1 class="text-start text-white"><?php echo $news['title'];?></h1>

                    </div>
                    <div class="card-body">
                        <p class="text-start text-white"><?php echo $news['description'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>
