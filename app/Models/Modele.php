<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modele extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $dates = ['deleted_at'];


    public function marque(){
        return $this->belongsTo('App\Marque');
    }
}
