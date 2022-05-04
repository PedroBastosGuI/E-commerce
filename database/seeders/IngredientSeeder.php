<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingredients') ->insert([
            'name' => 'Quick Oats',
             'description' => '100% whole grain oats (quick cooking)',
             'category' => 'oats',
             'price_per_gram' => 0.007,
        ]);

        DB::table('ingredients') ->insert([
            'name' => 'testers',
             'description' => '1% whole grain oats (quick cooking)',
             'category' => 'oats',
             'price_per_gram' => 0.007,
        ]);

    }
}
