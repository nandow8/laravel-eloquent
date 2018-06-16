<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

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
}
