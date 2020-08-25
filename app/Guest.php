<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guest extends Authenticatable
{
    use Notifiable;
    //
    protected $guard = 'guest';
    public function messages(){
        return $this->hasMany("App\Message");
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }
    public function options(){
        return $this->hasMany('App\GuestOption');
    }
}
