<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    public $timestamps = false;
    protected $table = 'medication';

    public function stocks ()
    {
        return $this->hasMany('App\Stock');
    }
}
