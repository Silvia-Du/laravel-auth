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
            $new_post->title = $faker->sentence();
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content = $faker->text(300);
            $new_post->image = $faker->image(null, 640, 480);
            $new_post->reading_time = $faker->text(300);
            $new_post->content = $faker->numberBetween(5, 15);
            $new_post->author = $faker->name($gender = null|'male'|'female');
            $new_post->category = $faker->word();
            $new_post->save();

        }
    }
}
