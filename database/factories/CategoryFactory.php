<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private $postCategories = [
        "Technology",
        "Health",
        "Lifestyle",
        "Finance",
        "Travel",
        "Food",
        "Education",
        "Entertainment",
        "Sports",
        "Science",
        "Business",
        "Art",
        "Culture",
        "Politics",
        "Environment",
        "Fashion",
        "DIY",
        "Parenting",
        "Relationships",
        "Gaming"
      ];

    public function definition(): array
    {
        $name = fake()->randomElement($this->postCategories);
        return [
            "name" =>$name
        ];
    }
}
