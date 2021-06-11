<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\SocialApp;
use Auth;

class Whatsapp extends Component
{
    public $messages = [];
    public $phoneImei;

    public function show($name) {
        $this->messages = SocialApp::where(["platform"=>"whatsapp","contact"=>$name])->get();
        // dd($this->messages);
    }

    public function render()
    {
        return view('livewire.client.whatsapp.index',[
            'conversations' => SocialApp::where(["platform"=>"whatsapp",'imei'=>$this->phoneImei])->orderBY("date","Desc")->distinct("contact")->get(),
            'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
            'whatsappList' => \App\Models\SocialApp::where(['platform'=>'whatsapp','imei'=>$this->phoneImei])->orderBy('date','asc')->get(),
        ])->extends('layouts.admin')
        ->section('window');
    }
}
