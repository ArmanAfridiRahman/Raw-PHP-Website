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
                'name' => 'galaxy',
            ],
            1 => [
                'id' => 2,
                'menu_id' => 4,
                'name' => 'star-system',
            ],
            2 => [
                'id' => 3,
                'menu_id' => 4,
                'name' => 'stars',
            ],
            3 => [
                'id' => 4,
                'menu_id' => 4,
                'name' => 'moon',
            ],
            4 => [
                'id' => 5,
                'menu_id' => 4,
                'name' => 'comet',
            ],
            5 => [
                'id' => 6,
                'menu_id' => 4,
                'name' => 'planets',
            ],


        ];
    }
    public function getAllCategory(){
        return $this->categories;
    }

}