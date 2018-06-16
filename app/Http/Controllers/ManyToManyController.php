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
}
