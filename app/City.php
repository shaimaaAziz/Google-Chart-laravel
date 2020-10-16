<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    /**
     * @var array
     */
    protected $guarded = [];


    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }
}
