<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = [
        'id',
        'name'
    ];

    public function users() {

        return $this->hasMany('App\Model\User');
    }

    public function hotels() {

        return $this->hasMany('App\Model\Hotel');
    }

    public function cities() {

        return $this->hasMany('App\Model\City');
    }
}
