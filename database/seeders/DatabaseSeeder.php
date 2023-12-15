<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //Llamo CategorySeeder para crear las categorias, antes que los posts
        $this->call(CategorySeeder::class);
        //Creo los posts con su factory
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
        
        
        Post::factory(30)->create();
    }

}
