<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body class="bg-black">
    <header class="">
        <section class="">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="container px-5 py-2 px-lg-2">
                    <a href="https://www.google.com/search?q=interstellar+brand&oq=interstellar+brand&aqs=chrome..69i57j0i512l9.4028j0j7&sourceid=chrome&ie=UTF-8" class="navbar-brand">
                        <i class="fa fa-2x text-bg-warning"> Bran</i>
                        <i class="fa fa-2x fa-space-shuttle"></i>
                    </a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse my-4 my-lg-0" id="menu">
                        <ul class="nav navbar-nav ms-auto hover-glow">

                            <a href="action.php?page=home" class="rounded-3 px-3 nav-link text-uppercase" >home</a></li>
                            <a href="action.php?page=home#about" class="rounded-3 px-3 nav-link text-uppercase" >about</a></li>
                            <a href="action.php?page=home#contact" class="rounded-3 px-3 nav-link text-uppercase" >contact</a></li>


                            <?php if(isset($_SESSION['id'])) {?>

                                <?php foreach ($menus as $menu) {?>

                                    <?php if($menu['dropdown']) {?>
                                        <li class="dropdown dropdown-hover">
                                            <a class="dropdown-toggle nav-link text-uppercase rounded-3 px-3 "><?php echo $menu['name'];?></a>
                                            <ul class="dropdown-menu dropdown-menu-dark py-2 w-50 ms-2 ms-lg-0 ">
                                                <?php foreach ($categories as $category) {?>
                                                    <?php if($menu['id'] == $category['menu_id']) {?>
                                                        <li class="mx-2 mx-lg-0"><a href="action.php?page=category&id=<?php echo $category['id'];?>" class="dropdown-item rounded-3 grow-2 w-90 ms-2 px-3 text-capitalize"><?php echo $category['name'];?></a></li>
                                                    <?php }?>
                                                <?php }?>
                                            </ul>
                                        </li>
                                    <?php } else{?>
                                        <li class="">
                                            <a href="action.php?page=<?php echo $menu['name'];?>" class="rounded-3 px-3 nav-link text-uppercase"><?php echo $menu['name'];?></a></li>
                                   <?php }?>
                                <?php }?>
                            <?php }?>


                        </ul>
                        <ul class="navbar-nav ms-lg-5 mt-4 mt-lg-0">
                            <li class=""><a href="#profileModal" data-bs-toggle="modal" class="nav-link text-uppercase text-bg-warning rounded-3 px-3 grow-3">Profile</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </section>
    </header>
