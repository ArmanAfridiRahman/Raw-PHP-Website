<?php

namespace App\classes;

class HomeContent
{
    public $contents = [];

    public function __construct()
    {
        $this->contents = [
            0 => [
                'id' => 1,
                'video' => 'assets/videos/animation.mp4',
                'video_head' => 'To the mind that is still, <br/>the whole universe surrenders.',
                'video_head_span' => "- Lao Tzu",
                'video_para' => "Our universe is 13.7 billion years old. All the history originated from a birth of a<br/> star. It is a blessing that we are part of this evolution.",
                'about_pera' => "Our universe has many wonders stored within. But the most important wonder is life. From single cell to today life wants to explore and <br/>witness every corner of the sandbox it is in.
                                The people of planet Earth has many plans to take life beyond this planet and hopefully beyond the solar system. Organizations <br/>like SpaceX and NASA are working towards that goal for a very long time...",
                'nasa_logo' => 'assets/img/home/about/nasa.png',
            ]
        ];
    }

    public function getAllHomeContent(){
        return $this->contents;
    }
}