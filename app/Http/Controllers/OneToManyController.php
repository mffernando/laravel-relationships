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
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();
        //dd($countries);
        //echo $country->name;

        foreach($countries as $country){
            echo $country->name;

        //$states = $country->states()->where('initials', 'PR')->get();
        //$states = $country->states()->get();
        $states = $country->states;

        foreach($states as $state){
            echo "<br>{$state->initials} - {$state->name}";
           }
        echo '<hr>';
        }
    }

    public function oneToManyTwo()
    {
        //$country = Country::where('name', 'Brasil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();
        //dd($countries);
        //echo $country->name;

        foreach($countries as $country){
            echo $country->name;

        //$states = $country->states()->where('initials', 'PR')->get();
        //$states = $country->states()->get();
        $states = $country->states;

        foreach($states as $state){
            echo "<br>{$state->initials} - {$state->name}: ";

            foreach($state->cities as $city){
                echo " {$city->name}, ";
            }
           }
        echo '<hr>';
        }
    }

    public function manyToOne()
    {
        $stateName = 'Munich';
        $state = State::where('name', $stateName)->get()->first();
        echo "<br>{$state->name}</br>";

        $country = $state->country()->get()->first();
        echo "<br>Country: {$country->name}";
    }
}
