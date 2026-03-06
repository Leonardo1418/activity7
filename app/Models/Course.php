<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relación: Un Curso le pertenece a un Kit de robótica (1 a Muchos inverso)
    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

    // Relación: Un Curso puede ser asignado a varios Grupos (Muchos a Muchos)
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}
