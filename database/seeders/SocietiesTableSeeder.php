<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
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

        $CategoryIds = DB::table('categories')->pluck('id')->toArray();

        $videoLinks = [
            'https://www.youtube.com/watch?v=4aS0jpAKi2s',
            'https://www.youtube.com/watch?v=YoMtSv0P88g',
            'https://www.youtube.com/watch?v=ZVBBCWhM-2s'
        ];

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
                'categorie_id' => $faker->randomElement($CategoryIds),
                'created_at' => now(),
                'updated_at' => now(),

                'facebook' => $faker->url,
                'instagram' => $faker->url,
                'twitter' => $faker->url,
                'linkdin' => $faker->url,
                'coordinations' => '<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d988.0620875187359!2d-7.604223452733702!3d33.59410775249861!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1690464523307!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'email' => $faker->email,
                'video' => Arr::random($videoLinks),
            ]);
        }
    }
}
