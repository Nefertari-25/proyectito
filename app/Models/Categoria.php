<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre','precio','tipo','nomComerciante'];
    public $timestamps = false;
    use HasFactory;

    public function cafeteria(){
        return $this->belongsToMany(Cafeteria::class);
    }


}
