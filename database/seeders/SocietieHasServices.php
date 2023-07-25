<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SocietieHasServices extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $societies = DB::table('societies')->pluck('id')->toArray();
        $services = DB::table('services')->pluck('id')->toArray();

        foreach (range(1, 150) as $index) {
            DB::table('societie_has_services')->insert([
                'societie_id' => $faker->randomElement($societies),
                'service_id' => $faker->randomElement($services),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
