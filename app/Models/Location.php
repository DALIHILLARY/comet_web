<?php

namespace App\Models;

use Database\Factories\LocationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'imei',
        'latitude',
        'longitude',
        'date'
    ];


    protected static function newFactory()
    {
        return LocationFactory::new();
    }

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
}
