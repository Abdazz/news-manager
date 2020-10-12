<?php
namespace Abdazz\PostsManager\Seeders;

use Abdazz\PostsManager\CategoryController;
use Abdazz\PostsManager\Models\Category;
use Abdazz\PostsManager\Models\Post;
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

        Category::factory(5)
        ->create()
        ->each(function(Category $category) {
            Post::factory(100)
                ->create([
                    'category_id' => $category->id,
                ]);
        });
    }
}
