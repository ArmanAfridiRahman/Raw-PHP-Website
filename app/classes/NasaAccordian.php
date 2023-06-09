<?php

namespace App\classes;

class NasaAccordian
{
    public $accoridans = [], $accordian;
    public function __construct()
    {
        $this->accoridans = [
          0 => [
              'id' => 1,
              'title' => "What is Nasa?",
              'answer' => "NASA stands for National Aeronautics and Space Administration.",
          ],
          1 => [
              'id' => 2,
              'title' => "What is NASA do?",
              'answer' => "Nasa conduct's research, testing, and development to advance aeronautics, including electric propulsion and supersonic flight. Nasa develops and funds space technologies that will enable future exploration and benefit life on Earth.",
          ],
          2 => [
              'id' => 3,
              'title' => "How is NASA important?",
              'answer' => "NASA's unique mission provides benefits in big and small ways. Dollars spent for space exploration create jobs, jumpstart businesses, and grow the economy. Our innovations improve daily life, advance medical research, support disaster response, and more.",
          ],
        ];
    }
    public function getNasaAccoridan(){
        return $this->accoridans;
    }
}