<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'classification',
        'planet_id',
    ];

    public function planet()
    {
        return $this->belongsTo(Planet::class);
    }
}
