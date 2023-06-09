<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($entities as $entity) {?>
                <a href="action.php?page=detail&id=<?php echo $entity['id'];?>" class="grow-3">
                    <div class="card card-body bg-transparent">
                        <img src="<?php echo $entity['image'];?>"  style=" height: 144px; object-fit: cover;" alt="" class="w-100">
                        <div class="card-img-overlay ">
                            <h1 class="text-white text-center bg-black bg-opacity-50 pt-5 pb-5 m-0">
                                <?php echo $entity['name'];?> <br/>

                            </h1>
                        </div>
                    </div>
                </a>
                <?php }?>
            </div>
        </div>
    </section>
<?php include "footer.php"?>
