<?php
require_once "./vendor/autoload.php";
use App\classes\Home;
use App\classes\Menu;
$menu = new Menu();
$home = new Home();

$menus = $menu->getAllMenu();

if(isset($_GET['page']))
{
    foreach ($menus as $menu){
        if($_GET['page'] == $menu['name'])
        {
            $home->index();
        }
    }

}