<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "kazuto",
            "username" => "kazuto",
            "email" => "kazuto@gmail.com",
            "password" => bcrypt(123)
        ]);

        Post::factory()->count(7)->create();

        Category::create([
            "name" => "Coding",
            "slug" => "coding"
        ]);

        Category::create([
            "name" => "Desain",
            "slug" => "desain"
        ]);

        Category::create([
            "name" => "Linux",
            "slug" => "linux"
        ]);
    }
}
