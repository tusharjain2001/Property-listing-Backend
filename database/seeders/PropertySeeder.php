<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'banner_image_url' => 'http://example.com/banner1.jpg',
            'title' => 'Beautiful Beach House',
            'description' => 'A beautiful beach house with stunning views.',
            'price' => 350000.00,
            'rating' => 4.5,
            'location' => 'California, USA',
            'images_url' => json_encode([
                'http://example.com/image1.jpg',
                'http://example.com/image2.jpg'
            ])
        ]);
    }
}
