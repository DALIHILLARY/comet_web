<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Menu extends Component
{
    public $phone;

    public function render()
    {
        return view('livewire.client.menu');
    }
}
