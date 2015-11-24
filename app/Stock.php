<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = false;
    protected $table = 'stock';

    public function medication ()
    {
        return $this->belongsTo('App\Medication');
    }

    public function clinic ()
    {
        return $this->belongsTo('App\Clinic');
    }
}
