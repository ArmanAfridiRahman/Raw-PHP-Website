<?php
namespace App\classes;
use App\classes\Category;
use App\classes\Menu;

class Home
{
    public $menu, $menus = [], $category, $categories = [];

    public function __construct()
    {
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();
        $this->menu = new Menu();
        $this->menus = $this->menu->getAllMenu();
    }

    public function index()
    {
        return view('home', ['menus' => $this->menus, 'categories' => $this->categories]);
    }

    public function about(){
        return view('about', ['menus' => $this->menus, 'categories' => $this->categories]);
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?page=home');
    }
}