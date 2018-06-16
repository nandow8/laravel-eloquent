<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne(){
        $country = Country::find(1);

        echo $country->name . '<hr>';
        
        $location = $country->location;
        echo 'Latitude: ' . $location->latitude . '<hr>';
        echo 'Longitude: ' . $location->longitude . '<hr>';

        echo '<hr><hr><hr>';
        //pegando dados com where
        //$countryy = Country::where('name', 'Brasil')->get(); // asim da erro, pois retorna um array 
        $countryy = Country::where('name', 'Brasil')->get()->first();
        $locationWhere = $countryy->location;
        echo $country->name . '<hr>';
        echo 'Latitude: ' . $location->latitude . '<hr>';
        echo 'Longitude: ' . $location->longitude . '<hr>';

    }
    
    public function oneToOneInverse(){
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude', $latitude)
                    ->where('longitude' , $longitude)
                    ->get()
                    ->first();
        echo $location->id;                     
        echo '<hr><hr><hr>';

        $country = $location->country;

        echo $country->name;
        

    }
}
