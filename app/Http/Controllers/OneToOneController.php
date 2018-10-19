<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    //one to one
    public function oneToOne()
    {
        $country = Country::find(1);
        echo $country->name;

        $location = $country->location;
        echo "<hr> Latitude: {$location->latitude} <br>";
        echo "Longitude: {$location->longitude} <br>";
    }

    //one to one inverse
    public function oneToOneInverse()
    {
        $latitude = 3;
        $longitude = 3;

        $location = Location::where('latitude', $latitude)->where('longitude', $longitude)->get()->first();
        //echo $location->id;
        //$country = $location->country; //Country.php
        $country = $location->country()->get()->first();
        echo $country->name;
    }
}
