<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Title 1'
        ]);
        Category::create([
            'name' => 'Title 2'
        ]);
        Category::create([
            'name' => 'Title 3'
        ]);
        Category::create([
            'name' => 'Title 4'
        ]);
        Category::create([
            'name' => 'Title 5'
        ]);
        Category::create([
            'name' => 'Title 6'
        ]);
    }
}
