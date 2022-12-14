<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquire extends Model
{
    protected $table = 'enquire';

    protected $fillable = ['name','email','phone','message'];



    public function user()
    {
        return $this->hasOne('App\User','id','agent_id');
    }

}
