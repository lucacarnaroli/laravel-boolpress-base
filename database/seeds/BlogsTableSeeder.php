<?php

use Illuminate\Database\Seeder;
// use PhpParser\Node\Expr\New_;
use App\Blog;
use Faker\Generator as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newBlog = New Blog;
            $newBlog->title = $faker->jobTitle();
            $newBlog->subtitle = $faker->catchPhrase();
            $newBlog->article = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $newBlog->save();
        }
    }
}
