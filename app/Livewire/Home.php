<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $count = 1;

   public function plus(){
    $this->count++;
    }

   public function minus(){
    $this->count--;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
