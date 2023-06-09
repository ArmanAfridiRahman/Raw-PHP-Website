<?php

namespace App\classes;

class HomeCarousel
{
    public $carousel = [];

    public function __construct()
    {
        $this->carousel = [
            0 => [
                'id' => 1,
                'image' => "assets/img/Black-Eye-Galaxy.jpg",
                'active' => 'active'
            ],
            1 => [
                'id' => 2,
                'image' => "assets/img/Sun.jpg",
                'active' => ''
            ],
            2 => [
                'id' => 3,
                'image' => "assets/img/andromeda.jpg",
                'active' => ''
            ],
            3 => [
                'id' => 4,
                'image' => "assets/img/vega.jpg",
                'active' => ''
            ],

        ];
    }
    public function getAllCarousel(){
        return $this->carousel;
    }
}