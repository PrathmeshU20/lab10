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
            'name' => 'Action'
        ]);
        Category::create([
            'name' => 'Adventure'
        ]);
        Category::create([
            'name' => 'Comedy'
        ]);
        Category::create([
            'name' => 'Horror'
        ]);
        Category::create([
            'name' => 'Science fiction'
        ]);
        Category::create([
            'name' => 'Drama'
        ]);
    }
}
