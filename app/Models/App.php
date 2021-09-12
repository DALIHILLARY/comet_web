<?php

namespace App\Models;

use Database\Factories\AppFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    protected static function newFactory()
    {
        return AppFactory::new();
    }

    public function phone() {
        return $this->belongsTo('App\Models\Phone','imei','imei');
    }
}
