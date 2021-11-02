<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
    User::create([
      "name"     => "nova ardiansyah",
      "username" => "novaardiansyah",
      "email"    => "nova@gmail.com",
      "password" => bcrypt("password")
    ]);

    User::factory(2)->create();

    Category::create([
      "name" => "web design",
      "slug" => "web-design"
    ]);
    Category::create([
      "name" => "web programming",
      "slug" => "web-programming"
    ]);
    Category::create([
      "name" => "personal",
      "slug" => "personal"
    ]);

    Post::factory(10)->create();
  }
}
