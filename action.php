<?php
require_once "./vendor/autoload.php";
use App\classes\Home;
use App\classes\Menu;
use App\classes\User;
$menu = new Menu();
$home = new Home();

$menus = $menu->getAllMenu();

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home'){
        $home->index();
    }
    elseif ($_GET['page'] == 'about'){
        $home->about();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $home->logout();
    }
//    foreach ($menus as $menu){
//        if($_GET['page'] == $menu['name'])
//        {
//
//        }
//        else{
//            echo "Page is under construction!";
//        }
//    }
}
elseif (isset($_POST['login_btn'])){
    $user = new User($_POST);
    $message = $user->login();
}