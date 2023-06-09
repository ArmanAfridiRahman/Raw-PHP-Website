<?php

namespace App\classes;

class SpacexAccordian
{
    public $accoridans = [], $accordian;
    public function __construct()
    {
        $this->accoridans = [
            0 => [
                'id' => 4,
                'title' => "what is SpaceX?",
                'answer' => "The Space Exploration Technologies Corporation, commonly referred to as SpaceX is an American spacecraft manufacturer, launcher, and satellite communications company headquartered in Hawthorne, California. It was founded in 2002 by Elon Musk with the goal of reducing space transportation costs to colonization of Mars.",
            ],
            1 => [
                'id' => 5,
                'title' => "What is the purpose of SpaceX starship?",
                'answer' => "Stacked atop its booster, Super Heavy, it composes the identically named Starship super heavy-lift space vehicle. The spacecraft is designed to transport both crew and cargo to a variety of destinations, including Earth orbit, the Moon, Mars, and potentially beyond.",
            ],
            2 => [
                'id' => 6,
                'title' => "Why is Elon Musk involved in SpaceX?",
                'answer' => "In 2002 SpaceX was created by entrepreneur Elon Musk, whose stated goals were to revolutionize the aerospace industry and to make spaceflight more affordable.",
            ],
        ];
    }
    public function getSpacexAccoridan(){
        return $this->accoridans;
    }
}