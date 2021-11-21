<?php

namespace Database\Seeders;

use App\Models\Post;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::create([
            'image' => 'https://source.unsplash.com/random/300x200?code',
            'title' => 'Card Title 1',
            'writer' => 'Written by Jeff on 11/21',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia exercitationem.',
            'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?',
            'source' => 'Bill Gates' 
        ]);

        Post::create([
            'image' => 'https://source.unsplash.com/random/301x201?code',
            'title' => 'Card Title 2',
            'writer' => 'Written by Jonh on 11/21',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia exercitationem.',
            'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?',
            'source' => 'Elon Musk' 
        ]);

        Post::create([
            'image' => 'https://source.unsplash.com/random/302x202?code',
            'title' => 'Card Title 3',
            'writer' => 'Written by Jonh on 11/21',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia exercitationem.',
            'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?',
            'source' => 'Jack Fresco' 
        ]);
    }
}
