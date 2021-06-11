<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Phone extends Component
{
    public $phoneImei;

    public function render()
    {
        return view('livewire.client.phone',[
            'phones' => \App\Models\Phone::where("mobile_access_token",Auth::user()->mobile_access_token)->get(),
        ])
        ->layout('layouts.admin')
        ->section('content');
    }
}
