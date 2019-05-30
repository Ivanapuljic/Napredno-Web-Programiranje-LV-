<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $fillable = [
        'naziv_projekta',
        'opis_projekta',
        'cijena_projekta',
        'obavljeni_poslovi',
        'datum_pocetka',
        'datum_zavrsetka',
        
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
