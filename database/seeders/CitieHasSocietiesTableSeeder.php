<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CitieHasSocietiesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $societies = DB::table('societies')->pluck('id')->toArray();
        $cities = DB::table('cities')->pluck('id')->toArray();

        foreach (range(1, 100) as $index) {
            DB::table('citie_has_societies')->insert([
                'societie_id' => $faker->randomElement($societies),
                'citie_id' => $faker->randomElement($cities),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
