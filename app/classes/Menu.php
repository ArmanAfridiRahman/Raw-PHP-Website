<?php

namespace App\classes;

class Menu
{
    public $menus = [];
    public function __construct()
    {
        $this->menus = [
            0 => [
                'id' => 1,
                'name' => 'home',
                'dropdown' => false,
            ],
            1 => [
                'id' => 2,
                'name' => 'about',
                'dropdown' => false,
            ],
            2 => [
                'id' => 3,
                'name' => 'contact',
                'dropdown' => false,
            ],
            3 => [
                'id' => 4,
                'name' => 'Celestial Bodies',
                'dropdown' => true,
            ],
            4 => [
                'id' => 5,
                'name' => 'Nasa',
                'dropdown' => false,
            ],
            5 => [
                'id' => 6,
                'name' => 'SpaceX',
                'dropdown' => false,
            ],
        ];
    }

    public function getAllMenu(){
        return $this->menus;
    }
}