<?php

namespace Squire\Models;

use Squire\Model;

class Region extends Model
{
    public static $schema = [
        'id' => 'string',
        'code' => 'string',
        'country_id' => 'string',
        'name' => 'string',
    ];

    public function airports()
    {
        return $this->hasMany(Airport::class);
    }

    public function continent()
    {
        return $this->hasOneThrough(Continent::class, Country::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function gbCounties()
    {
        return $this->hasMany(GbCounty::class);
    }
}