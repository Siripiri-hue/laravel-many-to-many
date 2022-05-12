<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Category;
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
        $cats = Category::all()->pluck('id')->all();
        $tagID = Tag::all()->pluck('id')->all();

        for ($i = 0; $i < 100; $i++) {
            $post = new Post();
            $post->title = $faker->words(5, true);
            $post->slug = Str::slug( $post->title );
            $post->content = $faker->paragraphs(3, true);
            $post->published_at = $faker->optional()->dateTimeBetween('-1 week', 'now');
            $post->category_id = $faker->randomElement($cats);
            $post->save();
            $randomTags = $faker->randomElements($tagID, 2);
            $post->tags()->attach($randomTags);            
        }
    }
}
