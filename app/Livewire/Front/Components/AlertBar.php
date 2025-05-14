<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class AlertBar extends Component
{
    public $alertType ;
    public $message ;


    public function render()
    {
        return view('livewire.front.components.alert-bar');
    }
}
