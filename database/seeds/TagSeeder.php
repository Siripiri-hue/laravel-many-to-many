<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Curiosity', 'Technology', 'Sport', 'Science', 'Beauty', 'Advice'];

        foreach($categories as $cat) {
            $newCat = new Category();
            $newCat->name = $cat;
            $newCat->slug = Str::slug($newCat->name, '-');
            $newCat->save();
        }
    }
}
