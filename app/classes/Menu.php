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
                'name' => 'celestial bodies',
                'dropdown' => true,
            ],
            1 => [
                'id' => 5,
                'name' => 'nasa',
                'dropdown' => false,
            ],
            2 => [
                'id' => 6,
                'name' => 'spacex',
                'dropdown' => false,
            ],
        ];
    }

    public function getAllMenu(){
        return $this->menus;
    }
}