<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{

    protected $fillable = [
        'user_id','latitude','longitude',
        'accuracy','status','alert_sent','timestamp'
    ];
    public $timestamps = false;
}


