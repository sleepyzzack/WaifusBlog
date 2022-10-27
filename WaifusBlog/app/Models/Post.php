<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos hacia user y category / one for all pointing to user and category

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos / all for all relation

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // realcion polimorfica / polimorfic reladed
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
