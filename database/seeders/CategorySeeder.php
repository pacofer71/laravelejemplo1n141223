<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Anime' => "Posts relacionado con el mundo Mangaca",
            'Juegos' => "Posts relacionados con videojuegos",
            'Deportes' => "Posts relacionados con el mundo del deporte",
            'Fotografias' => "Post relacionados con el mundo de la fotografia"
        ];
        foreach ($categorias as $n => $d) {
            Category::create([
                'nombre' => $n,
                'descripcion' => $d
            ]);
        }
        /*
        Category::create([nombre=>'anime', 'descripcion'=>'sadasddsad']);
        Category::create([nombre=>'Juegos', 'descripcion'=>'sadasddsad']);
        */
    }
}
