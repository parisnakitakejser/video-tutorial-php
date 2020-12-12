<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];
        $tags = ['Cake', 'Dessert'];


        foreach($tags AS $tag) {
            $inserts[] = [
                'title' => $tag,
                'user_id' => 1, // use the user-id
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];
        }

        \App\Models\Tags::insert($inserts);
    }
}
