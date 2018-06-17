<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
     

    public function polymorphicInsert(){
        $city = City::where('name', 'Suzano')->get()->first();

        echo $city;

        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name} " . date('YmdHis'),
        ]);

        var_dump($comment);
    }
}
