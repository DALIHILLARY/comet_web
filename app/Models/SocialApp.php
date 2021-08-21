<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class SocialApp extends Model
{
    use HasFactory;

    protected $attributes = [
        'created_at' => "hello",
        'updated_at' => "hello",
    ];
    protected $fillable = [
        'imei',
        'contact',
        'type',
        'message',
        'platform',
        'created_at',
        'updated_at',
        'date'
    ];

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
}
