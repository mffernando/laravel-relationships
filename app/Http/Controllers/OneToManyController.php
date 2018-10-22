<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        //$country = Country::where('name', 'Brasil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        //echo $country->name;

        foreach($countries as $country){
            echo $country->name;

        //$states = $country->states()->where('initials', 'PR')->get();
        $states = $country->states()->get();

        foreach($states as $state){
            echo "<br>{$state->initials} - {$state->name}";
           }
        echo '<hr>';
        }
    }
}
