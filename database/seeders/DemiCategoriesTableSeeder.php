<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemiCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $CategoryIds = DB::table('categories')->pluck('id')->toArray();

        foreach (range(1, 20) as $index) {
            DB::table('demi_categories')->insert([
                'name' => $faker->word,
                'categorie_id' => $faker->randomElement($CategoryIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
