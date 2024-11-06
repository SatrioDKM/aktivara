<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $homeText;

    public function __construct($homeText = 'Home')
    {
        $this->homeText = $homeText;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
