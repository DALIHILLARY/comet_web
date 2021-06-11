<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Socialmedia extends Component
{
    public $messages = [];
    public $phoneImei;

    public function render()
    {
        return view('livewire.client.socialmedia.index',[
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
        ])->layout('layouts.admin')
        ->section('content');
    }
}
