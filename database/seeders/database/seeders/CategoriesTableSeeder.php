<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clothing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Home & Garden', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports & Outdoors', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Toys & Games', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
