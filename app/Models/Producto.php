<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio'];

    public function users()
    {
        //Relación muchos a muchos (un producto tiene muchos usuarios)
        return $this->belongsToMany(User::class);
    }
}
