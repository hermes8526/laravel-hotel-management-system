<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'id',
        'country_id',
        'name'
    ];

    public function hotels () {

        return $this->hasMany('App\Models\Hotel');
    }

    public function country() {

        return $this->belongsTo('App\Models\Country', 'country_id');
    }
}
