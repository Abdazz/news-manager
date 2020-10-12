<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories=[
            "Aliments et boissons à base de végétaux",
            "Aliments d'origine végétale",
            "Boissons",
            "Céréales et pommes de terre",
            "Aliments à base de fruits et de légumes",
        ];

        return [
            "name"=>$this->faker->unique()->randomElement($categories),
        ];
    }
}
