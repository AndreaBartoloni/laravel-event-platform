<?php

namespace Database\Seeders;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $tags = [
            [
                "name" => 'Arancione',
                //"image" => 'https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg'
            ],
            [
                "name" => 'rossa',
                //"image" => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lamborghini.com%2Fit-en%2Fmodelli&psig=AOvVaw2esScvoggCfjUoKAz199Dd&ust=1707240040862000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCOjLkvTalIQDFQAAAAAdAAAAABAD'
            ],
            [
                "name" => 'Nera',
                //"image" => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lamborghini.com%2Fit-en%2Fmodelli&psig=AOvVaw2esScvoggCfjUoKAz199Dd&ust=1707240040862000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCOjLkvTalIQDFQAAAAAdAAAAABAD'
            ],
        ];

        foreach($tags as $tag){
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
