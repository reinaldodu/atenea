<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function users()
    {
        //Relación uno a muchos (un rol tiene muchos usuarios)
        return $this->hasMany(User::class);
    }
}
