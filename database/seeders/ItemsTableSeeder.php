<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        // Get some existing categories
        $cameraCategory = Category::where('name', 'Camera')->first();
        $memoryCardCategory = Category::where('name', 'Memory Card')->first();
        $lensCategory = Category::where('name', 'Lens')->first();
        $droneCategory = Category::where('name', 'Drone')->first();

        // Seed 20 items with different categories and details
        $items = [
            [
                'name' => 'Canon EOS 5D',
                'category_id' => $cameraCategory->id,
                'company' => 'Canon',
                'description' => 'A professional-grade DSLR camera.',
                'rent_per_day' => 50.00,
                'quantity' => 5,
            ],
            [
                'name' => 'Nikon D850',
                'category_id' => $cameraCategory->id,
                'company' => 'Nikon',
                'description' => 'High-resolution DSLR camera with advanced features.',
                'rent_per_day' => 60.00,
                'quantity' => 3,
            ],
            [
                'name' => 'GoPro HERO9',
                'category_id' => $cameraCategory->id,
                'company' => 'GoPro',
                'description' => 'Action camera for extreme sports and adventures.',
                'rent_per_day' => 30.00,
                'quantity' => 10,
            ],
            [
                'name' => 'Sony A7 III',
                'category_id' => $cameraCategory->id,
                'company' => 'Sony',
                'description' => 'A mirrorless camera with versatile performance.',
                'rent_per_day' => 55.00,
                'quantity' => 4,
            ],
            [
                'name' => 'SanDisk 64GB Memory Card',
                'category_id' => $memoryCardCategory->id,
                'company' => 'SanDisk',
                'description' => 'High-speed memory card for cameras and devices.',
                'rent_per_day' => 5.00,
                'quantity' => 20,
            ],
            [
                'name' => 'Samsung EVO 128GB Memory Card',
                'category_id' => $memoryCardCategory->id,
                'company' => 'Samsung',
                'description' => 'Durable and fast memory card for high-speed data transfer.',
                'rent_per_day' => 6.00,
                'quantity' => 15,
            ],
            [
                'name' => 'Lexar Professional 256GB Memory Card',
                'category_id' => $memoryCardCategory->id,
                'company' => 'Lexar',
                'description' => 'High-capacity memory card for professional use.',
                'rent_per_day' => 7.50,
                'quantity' => 8,
            ],
            [
                'name' => 'Nikon AF-S 50mm Lens',
                'category_id' => $lensCategory->id,
                'company' => 'Nikon',
                'description' => 'A versatile lens for everyday photography.',
                'rent_per_day' => 15.00,
                'quantity' => 10,
            ],
            [
                'name' => 'Canon EF 70-200mm Lens',
                'category_id' => $lensCategory->id,
                'company' => 'Canon',
                'description' => 'Telephoto zoom lens for sports and wildlife photography.',
                'rent_per_day' => 25.00,
                'quantity' => 6,
            ],
            [
                'name' => 'Sony FE 24-70mm Lens',
                'category_id' => $lensCategory->id,
                'company' => 'Sony',
                'description' => 'Standard zoom lens for various photography styles.',
                'rent_per_day' => 20.00,
                'quantity' => 5,
            ],
            [
                'name' => 'DJI Phantom 4 Pro Drone',
                'category_id' => $droneCategory->id,
                'company' => 'DJI',
                'description' => 'High-quality drone for professional aerial photography.',
                'rent_per_day' => 100.00,
                'quantity' => 2,
            ],
            [
                'name' => 'DJI Mavic Air 2',
                'category_id' => $droneCategory->id,
                'company' => 'DJI',
                'description' => 'Compact drone with powerful features and 4K video recording.',
                'rent_per_day' => 80.00,
                'quantity' => 4,
            ],
            [
                'name' => 'Parrot Anafi Drone',
                'category_id' => $droneCategory->id,
                'company' => 'Parrot',
                'description' => 'Lightweight and portable drone with 4K HDR camera.',
                'rent_per_day' => 70.00,
                'quantity' => 3,
            ],
            [
                'name' => 'DJI Ronin-S Gimbal',
                'category_id' => $cameraCategory->id,
                'company' => 'DJI',
                'description' => 'Handheld gimbal for smooth video capture.',
                'rent_per_day' => 25.00,
                'quantity' => 5,
            ],
            [
                'name' => 'Zhiyun Weebill-S Gimbal',
                'category_id' => $cameraCategory->id,
                'company' => 'Zhiyun',
                'description' => 'Lightweight gimbal for mirrorless and DSLR cameras.',
                'rent_per_day' => 20.00,
                'quantity' => 7,
            ],
            [
                'name' => 'Sony CyberShot RX100 VII',
                'category_id' => $cameraCategory->id,
                'company' => 'Sony',
                'description' => 'Compact camera with fast autofocus and 4K video.',
                'rent_per_day' => 35.00,
                'quantity' => 8,
            ],
            [
                'name' => 'Canon PowerShot G7 X Mark III',
                'category_id' => $cameraCategory->id,
                'company' => 'Canon',
                'description' => 'Compact camera ideal for vloggers and photographers.',
                'rent_per_day' => 40.00,
                'quantity' => 6,
            ],
            [
                'name' => 'Sony XQD 120GB Memory Card',
                'category_id' => $memoryCardCategory->id,
                'company' => 'Sony',
                'description' => 'Fast XQD memory card for high-speed data transfers.',
                'rent_per_day' => 10.00,
                'quantity' => 12,
            ],
            [
                'name' => 'DJI Osmo Action Camera',
                'category_id' => $cameraCategory->id,
                'company' => 'DJI',
                'description' => 'Compact action camera with dual screens.',
                'rent_per_day' => 25.00,
                'quantity' => 9,
            ],
            [
                'name' => 'Tamron 17-28mm Lens',
                'category_id' => $lensCategory->id,
                'company' => 'Tamron',
                'description' => 'Ultra-wide zoom lens for landscapes and architecture.',
                'rent_per_day' => 22.00,
                'quantity' => 6,
            ],
        ];

      
        foreach ($items as $item) {
            // Use firstOrCreate to avoid duplicating items
            Item::firstOrCreate(
                ['name' => $item['name']], // Condition to check if the item already exists
                $item // If not found, use these attributes to create the item
            );
        }
    }
}
