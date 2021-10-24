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
      "category_id" => mt_rand(1, 3),
      "user_id"     => mt_rand(1, 5),
      "title"       => $this->faker->sentence(mt_rand(10, 20)),
      "slug"        => $this->faker->slug(),
      "excerpt"     => $this->faker->sentence(mt_rand(50, 100)),
      "body"        => collect($this->faker->paragraphs(mt_rand(20, 40)))->map(fn ($p) => "<p>$p</p>")->implode('')
    ];
  }
}
