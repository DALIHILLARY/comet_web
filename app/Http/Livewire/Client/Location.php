<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Location extends Component
{
    public $phoneImei;

    public function render()
    {
        return view('livewire.client.location',[
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
        ])
        ->layout('layouts.admin')
        ->section('content');
    }
}
