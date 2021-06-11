<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Auth;

class Browser extends Component
{
    public $phoneImei;

    public function render()
    {
        return view('livewire.client.browser.index',[
            'queries' => \App\Models\Browser::all(),
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
        ])->layout('layouts.admin')
        ->section('content');
    }
}
