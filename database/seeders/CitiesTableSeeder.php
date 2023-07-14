<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('cities')->insert([
                'name' => $faker->city,
                'image' => $faker->imageUrl(),      
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
