<?php

namespace App\Http\Livewire\Client;

use App\Models\SocialApp;
use Livewire\Component;

class Facebook extends Component
{
    public $messages = [];
    public $phoneImei;

    public function show($name) {
        $this->messages = SocialApp::where(["platform"=>"facebook","from"=>$name])->orWhere(["platform"=>"facebook","to"=>$name])->get();
    }
    public function render()
    {
        return view('livewire.client.facebook.index',[
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
        ])
        ->layout('layouts.admin')
        ->section('content');
    }
}
