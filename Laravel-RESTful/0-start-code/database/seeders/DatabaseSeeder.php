<?php

namespace Database\Seeders;

use App\Models\Recipes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GroupsSeeder::class,
            UnitsSeeder::class,
            UserSeeder::class,
            TagsSeeder::class,
            RecipesSeeder::class,
            IngredientsSeeder::class,
        ]);
    }
}
