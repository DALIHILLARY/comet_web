<?php

namespace App\Http\Livewire\Client;

use App\Models\SocialApp;
use Livewire\Component;

class Facebook extends Component
{
    public $messages = [];

    public function show($name) {
        $this->messages = SocialApp::where(["platform"=>"facebook","from"=>$name])->orWhere(["platform"=>"facebook","to"=>$name])->get();
    }
    public function render()
    {
        return view('livewire.client.facebook.index');
    }
}
