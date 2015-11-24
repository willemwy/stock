<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public $timestamps = false;
    protected $table = 'clinic';


    public function stocks ()
    {
        return $this->hasMany('App\Stock');
    }

    public function lowStock()
    {
        return $this::join('stock', 'clinic.id', '=', 'stock.clinic_id')
            ->where('stock.level', '<', 5)
            ->select('clinic.id', 'clinic.name', 'stock.level')
            ->get();
    }
}
