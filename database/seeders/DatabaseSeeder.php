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

        $users = User::factory(10)->create();
        $categories = Category::factory(10)->create();
        for($i = 0; $i < 10; $i ++){
            for($j = 0; $j < 10; $j ++) {
                Post::factory()->create(['user_id' => $users[$i]->id, 'category_id' => $categories[$j]->id]);
            }
        }

    }
}
