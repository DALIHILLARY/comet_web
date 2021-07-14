<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PhoneFactory;
class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return PhoneFactory::new();
    }
    public function user(){
        return $this->belongsTo('App\Models\User','mobile_access_token','mobile_access_token');
    }
    public function sms() {
        return $this->hasMany('App\Models\Sms','imei','imei');
    }
    public function socialApp() {
        return $this->hasMany('App\Models\SocialApp','imei','imei');
    }
    public function contact() {
        return $this->hasMany('App\Models\Contact','imei','imei');
    }
    public function contactLog() {
        return $this->hasMany('App\Models\ContactLog','imei','imei');
    }
    public function browser() {
        return $this->hasMany('App\Models\Browser','imei','imei');
    }
    public function simcard() {
        return $this->hasMany('App\Models\Simcard','imei','imei');
    }
    public function app() {
        return $this->hasMany('App\Models\App','imei','imei');
    }
    public function mobileAccessToken() {
        return $this->belongsTo('App\Models\MobileAccessToken','mobile_access_token','token');
    }
    public function location() {
        return $this->hasMany('App\Models\Location','imei','imei');
    }
}
