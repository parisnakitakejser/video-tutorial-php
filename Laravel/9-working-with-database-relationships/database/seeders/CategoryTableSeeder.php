<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\Category(['name' => 'Category 1']);
        $category->save();

        $category = new \App\Models\Category(['name' => 'Category 2']);
        $category->save();

        $category = new \App\Models\Category(['name' => 'Category 3']);
        $category->save();
    }
}
