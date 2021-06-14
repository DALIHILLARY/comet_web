<?php

namespace App\Models;

use Database\Factories\MobileAccessTokenFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileAccessToken extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected  static function newFactory()
    {
        return MobileAccessTokenFactory::new();
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function phone() {
        return $this->hasone('App\Models\Phone');
    }

}
