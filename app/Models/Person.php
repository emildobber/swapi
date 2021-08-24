<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'height',
        'birth_year',
        'gender',
        'planet_id',
        'species_id'
    ];

    public function planet()
    {
        return $this->belongsTo(Planet::class);
    }

    public function species()
    {
        return $this->belongsTo(Species::class);
    }
}
