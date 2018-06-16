<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function OneToMany(){
        // $country = Country::where('name', 'Brasil')->get()->first();
        // echo $country->name . '<hr>';

        // // $states = $country->states;
        // $states = $country->states()->where('initials', 'GO')->get(); // trazer em forma de objetos permite passar parametros (utilizar get())

        // foreach ($states as $state) {
        //     echo "$state->initials - $state->name <br>";
        // }

        //exibindo estados vinculados ao pais Brasil
        $counties = Country::where('name', 'Like', '%Brasil%')->get();
        //$counties = Country::all(); //chamar todos paises e estados
        
        foreach ($counties as $country) {
            echo "<b> $country->name </b><br/>";
            $states = $country->states()->get();

            foreach ($states as $state) {
                echo "$state->initials - $state->name <br/>";
            }
        }
    }
}
