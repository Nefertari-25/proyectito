<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria'];
    public $timestaps = false;
    use HasFactory;

    public function cafeteria(){
        return $this->belongsToMany(Cafeteria::class);
    }


}
