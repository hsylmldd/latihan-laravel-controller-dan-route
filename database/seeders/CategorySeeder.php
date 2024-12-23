<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        // Membuat array kategori yang umum digunakan
        $categories = [
            'Elektronik',
            'Pakaian',
            'Makanan',
            'Minuman',
            'Peralatan Rumah',
            'Kesehatan',
            'Olahraga',
            'Buku',
            'Mainan',
            'Kosmetik'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
} 