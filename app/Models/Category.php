<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'descripcion'];

    //Indico la relacion 1:N con la tabla posts

    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }
}
