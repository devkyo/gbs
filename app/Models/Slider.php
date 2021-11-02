<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guard = [
        'id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
