<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//mesma pasta nao precisa de use no Location

class Country extends Model
{
    protected $fillable = ['name'];

    public function location(){
        //return $this->hasOne(Location::class); as duas maneiras funcionam
        //return $this->hasOne('App\Models\Location');
        
        
        //se o nome da chave estrangeira(em Location) nao seguir os padroes do laravel, é preciso informar o nome 
        //return $this->hasOne('App\Models\Location', 'country_id');

        //se o id da tabela Country nao ter o nome padrao 'id', é preciso um terceiro parametro informando o nome do id
        return $this->hasOne('App\Models\Location', 'country_id', 'id');
    }

    public function states(){
        return $this->hasMany(State::class);
    }
}
