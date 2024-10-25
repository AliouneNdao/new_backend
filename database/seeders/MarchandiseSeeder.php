<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marchandise;
use App\Models\Category;
use Faker\Factory as Faker;

class MarchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 26; $i++) {
            Marchandise::create([
                'nom' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'prix' => $faker->randomFloat(2, 10, 1000), // Génère un prix avec 2 décimales entre 10 et 1000
                'libelle' => $faker->text($maxNbChars = 200),
                'quantite' => $faker->numberBetween(1, 100), // Génère un nombre entre 1 et 100
                'category_id' => Category::inRandomOrder()->first()->id,
            ]);
        }
    }
}
 