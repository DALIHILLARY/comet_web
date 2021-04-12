<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Socialmedia extends Component
{
    public $messages = [];

    public function render()
    {
        return view('livewire.client.socialmedia.index');
    }
}
