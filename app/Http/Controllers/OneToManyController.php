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

        //trazer estados em uma unica consulta, melhorando a performance
        $counties = Country::with('states')->get();
        
        foreach ($counties as $country) {
            echo "<b> $country->name </b><br/>";
            $states = $country->states()->get();

            foreach ($states as $state) {
                echo "$state->initials - $state->name <br/>";
            }
        }
    }

    public function manyToOne(){
        $stateName = 'São Paulo';
        $state = State::where('name', $stateName)->get()->first();

        echo $state->name;

        $country = $state->country;

        echo $country->name;
    }

    public function oneToManyTwo(){
        //trazer estados em uma unica consulta, melhorando a performance
        $counties = Country::with('states')->get();
        
        foreach ($counties as $country) {
            echo "<b> $country->name </b><br/>";
            $states = $country->states()->get();

            foreach ($states as $state) {
                echo "$state->initials - $state->name <br/>";
                foreach ($state->cities as $city) {
                    echo "{$city->name}";
                }
            }
        }

        //caso queria chamar os estados e cidades:
        $cidadesEstados = State::with('cities')->get();
        dd($cidadesEstados);
    }

    public function oneToManyInsert(){
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA'
        ];
        
        $country = Country::find(1);

        $inset = $country->states()->create($dataForm);
        var_dump($inset->name); 
    }
    
    public function oneToManyInsertTwo(){
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
            'country_id' => '1'
        ]; 

        $inset = State::create($dataForm);
        var_dump($inset->name); 
    }
}
