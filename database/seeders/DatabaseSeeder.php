<?php

namespace Database\Seeders;

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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-slug',
            'excerpt' => 'Lorem ipsum ipsum',
            'body' => 'Lorem ipsum ipsum Lorem ipsum ipsum Lorem ipsum ipsum Lorem ipsum ipsumLorem ipsum ipsum',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-slug',
            'excerpt' => 'Lorem ipsum ipsum',
            'body' => 'Lorem ipsum ipsum Lorem ipsum ipsum Lorem ipsum ipsum Lorem ipsum ipsumLorem ipsum ipsum',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-third-slug',
            'excerpt' => 'Lorem ipsum ipsum',
            'body' => 'Lorem ipsum ipsum Lorem ipsum ipsum Lorem ipsum ipsum Lorem ipsum ipsumLorem ipsum ipsum',
        ]);
    }
}
