<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


     protected $fillable = [
        'name',
        'image',
        'slug',
        'code',
        'large',
        'ancho',
        'alto',
        'diametro',
        'capacidad',
        'user_id',
        'category_id'
    ]; 


    public function colors()
    {
        return $this->belongsToMany('App\Models\Color');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
