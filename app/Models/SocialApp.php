<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialApp extends Model
{
    use HasFactory;
    protected $fillable = [
        'imei',
        'contact',
        'type',
        'message',
        'platform',
        'date'
    ];

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
}
