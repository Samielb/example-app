<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Zorg dat naam mass-assignable is

    // Relatie: Een SolarSystem heeft veel planeten
    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}











?>