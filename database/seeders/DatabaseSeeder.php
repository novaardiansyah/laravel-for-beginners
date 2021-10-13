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
    // \App\Models\User::factory(10)->create();
    User::create([
      "name" => "nova ardiansyah",
      "email" => "default-1@gmail.com",
      "password" => bcrypt("12345")
    ]);
    User::create([
      "name" => "aditiya saputra",
      "email" => "default-2@gmail.com",
      "password" => bcrypt("12345")
    ]);

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

    Post::create([
      "category_id" => 1,
      "user_id" => 1,
      "title" => "Lorem ipsum dolor sit 1",
      "slug" => "lorem-ipsum-dolor-sit-1",
      "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quisquam mollitia eius rerum et repellat harum beatae, quia neque quidem fuga nemo ut fugit esse animi aliquid ad cumque?..",
      "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam amet recusandae inventore id distinctio dolore sapiente et vel eaque ducimus necessitatibus eius, molestiae explicabo nihil praesentium saepe ullam ipsum minima.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias unde quis distinctio quos esse repellat mollitia ad! Itaque quaerat voluptate eaque odit quod asperiores quasi atque consequuntur quidem, in ea repellendus veniam debitis perferendis rem, nostrum, sint deleniti. Maiores, voluptas!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ratione ex aperiam accusantium aliquam, fuga doloremque dicta id illum dolorum laborum earum adipisci, soluta ad sed voluptas consequuntur. Beatae, ipsa! Porro, minus magni. Natus sequi iusto accusamus ad magnam ipsam unde excepturi saepe enim culpa. Voluptatem similique nulla modi assumenda!</p>"
    ]);

    Post::create([
      "category_id" => 2,
      "user_id" => 2,
      "title" => "Lorem ipsum dolor sit 2",
      "slug" => "lorem-ipsum-dolor-sit-2",
      "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quisquam mollitia eius rerum et repellat harum beatae, quia neque quidem fuga nemo ut fugit esse animi aliquid ad cumque?..",
      "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam amet recusandae inventore id distinctio dolore sapiente et vel eaque ducimus necessitatibus eius, molestiae explicabo nihil praesentium saepe ullam ipsum minima.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias unde quis distinctio quos esse repellat mollitia ad! Itaque quaerat voluptate eaque odit quod asperiores quasi atque consequuntur quidem, in ea repellendus veniam debitis perferendis rem, nostrum, sint deleniti. Maiores, voluptas!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ratione ex aperiam accusantium aliquam, fuga doloremque dicta id illum dolorum laborum earum adipisci, soluta ad sed voluptas consequuntur. Beatae, ipsa! Porro, minus magni. Natus sequi iusto accusamus ad magnam ipsam unde excepturi saepe enim culpa. Voluptatem similique nulla modi assumenda!</p>"
    ]);
  }
}
