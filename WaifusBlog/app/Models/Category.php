<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    

    //relacion de uno a muchos / one for all related
    public function posts(){
        return $this->hasMany(Posts::class);

    }

}
