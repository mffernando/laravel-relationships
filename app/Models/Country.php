<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model
{
    protected $fillable = ['name'];

    //return one
    public function location()
    {
        return $this->hasOne(Location::class);
    }

    //return many states
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
