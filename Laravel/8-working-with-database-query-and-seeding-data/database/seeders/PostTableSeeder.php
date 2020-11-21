<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Posts([
            'title' => 'My first seed title',
            'name' => 'test seed name',
            'content' => 'this is the first content from a seed to go into the database.'
        ]);
        $post->save();

        for ($x = 1; $x <= 25; $x++){
            $post = new \App\Models\Posts([
                'title' => 'Seed title '. $x,
                'name' => 'seeder forloop',
                'content' => 'this content coming from forloop where x='. $x
            ]);
            $post->save();
        }
    }
}
