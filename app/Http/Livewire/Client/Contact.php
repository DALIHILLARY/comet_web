<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Contact extends Component
{
    public $phoneImei;

    public function render()
    {
        return view('livewire.client.contact.index',[
            'contacts' => \App\Models\Contact::all(),
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
        ])->layout('layouts.admin')
        ->section('content');
    }
}
