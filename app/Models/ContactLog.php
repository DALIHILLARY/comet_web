<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
    public function contact() {
        return $this->belongsTo('App\Models\Contact','phone_number','phone_number');
    }
}
