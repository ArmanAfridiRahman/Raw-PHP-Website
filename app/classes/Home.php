<?php
namespace App\classes;
use App\classes\Category;
use App\classes\Menu;
use App\classes\Entity;
use App\classes\Nasa;
use App\classes\Spacex;

class Home
{
    public $menu, $menus = [], $category, $categories = [], $entity, $entities =[], $singleNews, $singleEntity, $nasa, $nasaInfo = [], $nasaNews = [], $spacex, $spacexInfo = [], $spacexNews = [];

    public function __construct()
    {
        $this->nasa = new Nasa();
        $this->nasaInfo = $this->nasa->getNasa();
        $this->nasaNews = $this->nasa->getLatestNews();
        $this->spacex = new Spacex();
        $this->spacexInfo = $this->spacex->getSpacex();
        $this->spacexNews = $this->spacex->getLatestNews();
        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();
        $this->menu = new Menu();
        $this->menus = $this->menu->getAllMenu();
        $this->entity = new Entity();
        $this->entities = $this->entity->getAllEntities();

    }

    public function index()
    {
        return view('home', ['menus' => $this->menus, 'categories' => $this->categories]);
    }
    public function categoryEntity($id){
        $this->entities = $this->entity->getAllCategoryEntity($id);
        return view('category', ['menus' => $this->menus, 'categories' => $this->categories, 'entities' => $this->entities]);
    }
    public function entityDetail($id){
        $this->singleEntity = $this->entity->getEntityById($id);
        return view('detail', ['menus' => $this->menus, 'categories' => $this->categories, 'entity' => $this->singleEntity]);
    }
    public function nasaNews($id){
        $this->singleNews = $this->nasa->getNewsById($id);
        return view('news', ['menus' => $this->menus, 'categories' => $this->categories, 'news' => $this->singleNews]);
    }

    public function nasa(){

        return view('nasa', ['menus' => $this->menus, 'categories' => $this->categories, 'information' => $this->nasaInfo, 'news' => $this->nasaNews]);
    }
    public function spacex(){
        return view('spacex', ['menus' => $this->menus, 'categories' => $this->categories, 'information' => $this->spacexInfo, 'news' => $this->spacexNews]);
    }
    public function spacexNews($id){
        $this->singleNews = $this->spacex->getNewsById($id);
        return view('news', ['menus' => $this->menus, 'categories' => $this->categories, 'news' => $this->singleNews]);
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?page=home');
    }

}