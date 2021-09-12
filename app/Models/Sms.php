<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
}
