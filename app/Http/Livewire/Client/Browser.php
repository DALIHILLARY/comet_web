<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Auth;

class Browser extends Component
{
    public function render()
    {
        return view('livewire.client.browser.index',[
            'queries' => \App\Models\Browser::all(),
        ]);
    }
}
