<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Models\Game;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Tag::factory()->count(3)->create();
       Category::factory()->count(3)->create();
       Post::factory()->count(3)->create();
       Game::factory()->count(3)->create();

        Role::insert([
            [
                "name"=> "user"
            ],
            [
                "name"=> "admin"
            ],
            [
                "name"=> "moder"
            ]
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
