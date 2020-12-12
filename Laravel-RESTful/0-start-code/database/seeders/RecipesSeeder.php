<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes_data = new \App\Models\Recipes([
            'user_id' => 1,
            'groups_id' => 4,
            'url' => 'chocolate-brownie-cake',
            'title' => 'Chocolate brownie cake',
            'procedure' => 'STEP 1\nHeat oven to 180C/fan 160C/gas 4. Grease and line a 20cm cake tin.\nSTEP 2\nPlace the butter, caster sugar, brown sugar, chocolate and golden syrup in the pan and melt gently on a low heat until it is smooth and lump-free\nSTEP 3\nRemove the pan from the heat.\nSTEP 4\nBreak the eggs into the bowl and whisk with the fork until light and frothy. 5 Add the eggs, vanilla extract or essence, flour, baking powder and cocoa powder to the chocolate mixture and mix thoroughly.\nSTEP 5\nPut the mixture into the greased and lined cake tin and place on the middle shelf of the oven. Bake for 25-30 mins.\nSTEP 6\nRemove and allow to cool for 20-30 mins before cutting into wedges and serving.\nSTEP 7\nServe with cream or ice cream and plenty of fresh fruit.',
            'working_time_total' => 135,
            'working_time_active' => 15,
            'days_of_durability' => 3,
            'number_of_people' => 8,
        ]);
        $recipes_data->save();

        $recipes_data->tags()->attach([1, 2]);
    }
}
