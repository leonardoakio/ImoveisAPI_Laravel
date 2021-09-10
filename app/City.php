<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function state()
    {
        //Cidade pertencer a um estado
        return $this->belongsTo(State::class);
    }

    public function adresses()
    {
        return $this->hasMany(Address::class);
    }
}