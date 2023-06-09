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
    elseif($_GET['page'] == 'category')
    {
        $home->categoryEntity($_GET['id']);
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->entityDetail($_GET['id']);
    }
    elseif ($_GET['page'] == 'companyNasa')
    {
        $home->nasaNews($_GET['id']);
    }
    elseif ($_GET['page'] == 'companySpacex')
    {
        $home->spacexNews($_GET['id']);
    }
    elseif ($_GET['page'] == 'nasa'){
        $home->nasa();
    }
    elseif ($_GET['page'] == 'spacex'){
        $home->spacex();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $home->logout();
    }
    else
    {
        $home->index();
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