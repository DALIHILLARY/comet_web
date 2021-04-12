<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\SocialApp;
use Auth;

class Whatsapp extends Component
{
    public $messages = [];

    public function show($name) {
        $this->messages = SocialApp::where(["platform"=>"whatsapp","contact"=>$name])->get();
        // dd($this->messages);
    }

    public function render()
    {
        return view('livewire.client.whatsapp.index',[
            'conversations' => SocialApp::where(["platform"=>"whatsapp"])->orderBY("date","Desc")->distinct("contact")->get(),
        ]);
    }
}
