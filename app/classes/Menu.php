<?php

namespace App\classes;

class Menu
{
    public $menus = [];
    public function __construct()
    {
        $this->menus = [


            0 => [
                'id' => 4,
                'name' => 'Celestial Bodies',
                'dropdown' => true,
            ],
            1 => [
                'id' => 5,
                'name' => 'Nasa',
                'dropdown' => true,
            ],
            2 => [
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