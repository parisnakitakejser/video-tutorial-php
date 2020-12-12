<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UnitGroupsSeeder::class,
        ]);

        $inserts = [];
        $units = [
            // Volume
            ['group_id' => 1, 'short' => 'tsp.', 'long' => 'teaspoon'],
            ['group_id' => 1, 'short' => 'tbsp.', 'long' => 'tablespoon'],
            ['group_id' => 1, 'short' => 'fl oz', 'long' => 'fluid ounce'],
            ['group_id' => 1, 'short' => '1/2 cup', 'long' => 'gill'],
            ['group_id' => 1, 'short' => 'c', 'long' => 'cup'],
            ['group_id' => 1, 'short' => 'fl pt', 'long' => 'pint'],
            ['group_id' => 1, 'short' => 'fl qt', 'long' => 'quart'],
            ['group_id' => 1, 'short' => 'gal', 'long' => 'gallon'],
            ['group_id' => 1, 'short' => 'ml', 'long' => 'milliliter'],
            ['group_id' => 1, 'short' => 'l', 'long' => 'liter'],
            ['group_id' => 1, 'short' => 'dl', 'long' => 'deciliter'],

            // Mass and Weight
            ['group_id' => 2, 'short' => 'lb', 'long' => 'pound'],
            ['group_id' => 2, 'short' => 'oz', 'long' => 'ounce'],
            ['group_id' => 2, 'short' => 'mg', 'long' => 'milligram'],
            ['group_id' => 2, 'short' => 'g', 'long' => 'gram'],
            ['group_id' => 2, 'short' => 'kg', 'long' => 'kilogram'],

            // Length
            ['group_id' => 3, 'short' => 'mm', 'long' => 'millimeter'],
            ['group_id' => 3, 'short' => 'cm', 'long' => 'centimeter'],
            ['group_id' => 3, 'short' => 'm', 'long' => 'meter'],
            ['group_id' => 3, 'short' => 'in', 'long' => 'inch'],

            // Others
            ['group_id' => 4, 'short' => 'pcs', 'long' => 'pieces'],
        ];

        foreach($units AS $unit) {
            $inserts[]= [
                'unit_groups_id' => $unit['group_id'],
                'title_long' => $unit['long'],
                'title_short' => $unit['short'],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];
        }

        \App\Models\Units::insert($inserts);
    }
}
