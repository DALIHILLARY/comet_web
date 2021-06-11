<?php

namespace App\Http\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sms extends Component
{
    public $phoneImei;

    public function render()
    {
        return view('livewire.client.sms.index',[
            'smses' => \App\Models\Sms::all(),
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
        ])->layout('layouts.admin')
        ->section('content');
    }
}
