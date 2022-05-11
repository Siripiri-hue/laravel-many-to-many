<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Videogames', 'TV Series', 'Movie', 'News', 'Food', 'Comics', 'Travels'];

        foreach($categories as $cat) {
            $newCat = new Category();
            $newCat->name = $cat;
            $newCat->slug = Str::slug($newCat->name, '-');
            $newCat->save();
        }
    }
}
