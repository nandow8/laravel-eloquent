<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function manyToMany(){
        $city = City::where('name', 'Suzano')->get()->first();

        echo $city->name . '<br/>';

        $companies = $city->companies;

        foreach ($companies as $company) {
            echo $company->name;
        }
    }
    
    public function manyToManyInverse(){
        $company = Company::where('name', 'Especializa TI')->get()->first();
        echo $company->name . '<br/>';
        
        $cities = $company->cities;

        foreach ($cities as $city) {
            echo $city->name;
        }
    }

    public function manyToManyInsert(){
        $company = Company::where('name', 'Especializa TI')->get()->first();
        
        echo $company->name . '<br/>';
        
        $dataForm = [1,2]; //se remover um numero do array, o sync tambem remove do banco
        //$company->cities()->sync($dataForm); //salva sincronizando com o que tenho no dataform
        //$company->cities()->attach($dataForm); salva forçado
        $company->cities()->detach($dataForm); //remove todos os que estiverem no array

        $cities = $company->cities;

        foreach ($cities as $city) {
            echo $city->name;
        }
    }
}
