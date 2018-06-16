<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//mesma pasta nao precisa de use no Location

class Country extends Model
{
    public function location(){
        return $this->hasOne(Location::class);
    }
}
