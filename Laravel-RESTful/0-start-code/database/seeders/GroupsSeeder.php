<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];
        $groups = ['Dinner', 'Breakfast and Brunch', 'Lunch', 'Dessert'];

        foreach($groups AS $group) {
            $inserts[] = [
                'title' => $group,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];
        }

        \App\Models\Groups::insert($inserts);
    }
}
