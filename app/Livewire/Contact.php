<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Contact extends Component
{
    #[Layout('components.layouts.main')]
    public function render()
    {
        return view('livewire.contact');
    }
}
