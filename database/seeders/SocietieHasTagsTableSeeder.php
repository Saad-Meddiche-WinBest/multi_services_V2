<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SocietieHasTagsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $societies = DB::table('societies')->pluck('id')->toArray();
        $tags = DB::table('tags')->pluck('id')->toArray();

        foreach (range(1, 300) as $index) {
            DB::table('societie_has_tags')->insert([
                'societie_id' => $faker->randomElement($societies),
                'tag_id' => $faker->randomElement($tags),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
