<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $post = new Post();
            $post->title = $faker->words(5, true);
            $post->slug = Str::slug( $post->title );
            $post->content = $faker->paragraphs(3, true);
            $post->published_at = $faker->optional()->dateTimeBetween('-1 week', 'now');
            $post->save();
        }
    }
}
