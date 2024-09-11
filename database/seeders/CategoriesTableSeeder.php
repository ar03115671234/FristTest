<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Camera', 'description' => 'Various types of cameras'],
            ['name' => 'Memory Card', 'description' => 'Storage devices for cameras and other electronics'],
            ['name' => 'Lens', 'description' => 'Camera lenses of various types'],
            ['name' => 'Drone', 'description' => 'Drones for photography and videography'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
