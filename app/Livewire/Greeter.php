<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $hello = "Hello";

    public function render()
    {
        return view('livewire.greeter');
    }
}
