<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafeteria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'descripcion'];
    public $timestamps = false; //omite el timestamps

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
