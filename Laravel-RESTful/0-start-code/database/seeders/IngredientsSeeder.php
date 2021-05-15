<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts_to_recipes = [];

        $ingredients = [[
            'title' => 'Butter',
            'quantity' => 100.0,
            'unit' => 15,
        ], [
            'title' => 'Caster Sugar',
            'quantity' => 125.0,
            'unit' => 15,
        ], [
            'title' => 'Light Brown Sugar',
            'quantity' => 75.0,
            'unit' => 15,
        ], [
            'title' => 'Plain Chocolate',
            'quantity' => 125.0,
            'unit' => 15,
        ], [
            'title' => 'Golden Syrup',
            'quantity' => 1.0,
            'unit' => 2,
        ], [
            'title' => 'Eggs',
            'quantity' => 2.0,
            'unit' => 21,
        ], [
            'title' => 'Vanilla Extract/Essence',
            'quantity' => 1.0,
            'unit' => 1,
        ], [
            'title' => 'Plain Flour',
            'quantity' => 100.0,
            'unit' => 15,
        ], [
            'title' => 'Baking Powder',
            'quantity' => 0.5,
            'unit' => 1,
        ], [
            'title' => 'Cocoa Powder',
            'quantity' => 2.0,
            'unit' => 2,
        ]];

        foreach($ingredients AS $inx => $ingredient) {
            $insert_ingredient = new \App\Models\Ingredients([
                'title' => $ingredient['title'],
                'user_id' => 1, // use the user-id
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);

            $insert_ingredient->save();

            $insert_ingredient->recipes()->attach(1, [
                'units_id' => $ingredient['unit'],
                'quantity' => $ingredient['quantity'],
            ]);
        }

        \App\Models\Ingredients::insert($inserts_to_recipes);
    }
}
