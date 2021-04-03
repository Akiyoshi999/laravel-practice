<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
// use Database\Factories\CommentFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(50)
            ->has(Comment::factory()->count(2))
            ->create();
    }
}
