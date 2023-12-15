<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['titulo', 'contenido', 'publicado', 'imagen', 'category_id'];

    //Le indico en el modelo la relacion 1:N con Category

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
