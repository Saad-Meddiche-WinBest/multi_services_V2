<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ServicesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DemiCategoriesTableSeeder::class);
        $this->call(SocietiesTableSeeder::class);
        $this->call(SocietieHasTagsTableSeeder::class);
        $this->call(CitieHasSocietiesTableSeeder::class);
    }
}
