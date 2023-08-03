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

        $cities = [
            'Casablanca', 'Rabat', 'Fes', 'Marrakech', 'Tangier', 'Meknes', 'Agadir', 'Oujda', 'Kenitra', 'Tetouan',
            'Safi', 'Mohammedia', 'Khouribga', 'Beni Mellal', 'Fes al Bali', 'El Jadida', 'Taza', 'Nador', 'Settat', 'Larache',
            'Ksar El Kebir', 'Guelmim', 'Berrechid', 'Oued Zem', 'Taourirt', 'Berkane', 'Sidi Slimane', 'Sidi Qacem', 'Khemisset',
            'Taroudant', 'Essaouira', 'Tiflet', 'Oulad Teima', 'Sefrou', 'Youssoufia', 'Tiznit', 'Lqliaa', 'Jerada', 'Khenifra',
            'Ben Guerir', 'Ouarzazate', 'Ain Harrouda', 'Skhirate', 'Tirhanimine', 'Tinghir',
            'Chefchaouene', 'Dakhla', 'Ifrane', 'Bouznika', 'Ouazzane',
            'Tahala', 'Zagora', 'Taounate', 'Sidi Bennour', 'Sidi Bennour', 'Azrou', 'Tan-Tan', 'Ouezzane', 'Mdiq', 'El Aioun',
            'Zaio', 'Tiflet', 'Zawyat an Nwaçer', 'Boujniba', 'Guercif', 'Imzouren', 'Fnideq', 'Zeghanghane', 'Asilah', 'Ait Melloul',
            'Lakhsas', 'Souq Khamis', 'Ahfir', 'Al Hoceima', 'El Hajeb', 'Tetouan', 'Ain Cheggag', 'Midelt', 'Azemmour', 'Larache',
            'Aghbala'
        ];

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city,
                'image' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
