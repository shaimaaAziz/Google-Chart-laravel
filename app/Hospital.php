<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $guarded = [];


    public function City()
    {
        return $this->belongsTo(City::class);
    }
}
