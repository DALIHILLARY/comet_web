<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
    public function contactLog() {
        return $this->hasMany('App\Models\ContactLog','phone_number','phone_number');
    }
}
