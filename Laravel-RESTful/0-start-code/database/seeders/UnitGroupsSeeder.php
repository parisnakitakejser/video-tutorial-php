<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];
        $groups = ['Volume', 'Mass and Weight', 'Length' , 'Others'];

        foreach($groups AS $group) {
            $inserts[] = [
                'title' => $group,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];
        }

        \App\Models\UnitGroups::insert($inserts);
    }
}
