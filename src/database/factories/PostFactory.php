<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->sentence(6, true),
            "content"=>$this->faker->text(2000),
            "image"=>$this->faker->file('/home/abdoul/web/demo3/public/vendor/posts-manager/imgs', '/home/abdoul/web/demo3/public/vendor/posts-manager/images', false),
        ];
    }
}
