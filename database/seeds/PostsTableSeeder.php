<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<25; $i++){
            $new_post = new Post();
            $new_post->title = $faker->words(5, true);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content = $faker->text(300);
            $new_post->image = $faker->image();
            $new_post->reading_time = $faker->numberBetween(5, 15);
            $new_post->author = $faker->lastName();
            $new_post->category = $faker->word();
            $new_post->save();

        }
    }
}
