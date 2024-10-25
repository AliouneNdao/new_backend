<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = ['sneaker','pointure','marque'];

        for ($i = 0; $i < count($categories); $i++) {
            Category::create([
                'nom' => $categories[$i]
           ]);
        }
    }
}
