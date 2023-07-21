<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocietiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $demiCategoryIds = DB::table('demi_categories')->pluck('id')->toArray();

        foreach (range(1, 100) as $index) {
            DB::table('societies')->insert([
                'title' => $faker->company,
                'ice' => $faker->randomNumber(9),
                'adress' => $faker->address,
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl(),
                'telephone' => $faker->phoneNumber,
                'fax' => $faker->optional()->phoneNumber,
                'web_link' => $faker->url,
                'demi_categorie_id' => $faker->randomElement($demiCategoryIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
