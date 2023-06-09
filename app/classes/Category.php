<?php

namespace App\classes;

class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'menu_id' => 4,
                'name' => 'Galaxy',
            ],
            1 => [
                'id' => 2,
                'menu_id' => 4,
                'name' => 'Solar System',
            ],
            2 => [
                'id' => 3,
                'menu_id' => 4,
                'name' => 'Stars',
            ],
            3 => [
                'id' => 4,
                'menu_id' => 4,
                'name' => 'Moon',
            ],
            4 => [
                'id' => 5,
                'menu_id' => 4,
                'name' => 'Comet',
            ],
            5 => [
                'id' => 6,
                'menu_id' => 4,
                'name' => 'Planets',
            ],


        ];
    }
    public function getAllCategory(){
        return $this->categories;
    }

}