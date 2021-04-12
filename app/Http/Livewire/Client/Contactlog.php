<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Contactlog extends Component
{
    public function render()
    {
        return view('livewire.client.contactlog.index',[
            'contactlogs' => \App\Models\ContactLog::all(),
        ]);
    }
}
