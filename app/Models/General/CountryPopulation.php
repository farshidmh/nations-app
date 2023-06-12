<?php

namespace App\Models\General;

use Jenssegers\Mongodb\Eloquent\Model;

class CountryPopulation extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'population';


    protected $fillable = [
        'id',
        'title'
    ];



}
