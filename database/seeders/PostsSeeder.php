<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            Post::create([
                'title' => fake()->words(rand(3, 10), true),
                'body' => fake()->words(rand(50, 100), true),
                'img' => fake()->imageUrl(640, 480),
                'user_id' => rand(1, 5),
            ]);
        }
    }
}
