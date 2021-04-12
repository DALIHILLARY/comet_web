<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.client.contact.index',[
            'contacts' => \App\Models\Contact::all(),
        ]);
    }
}
