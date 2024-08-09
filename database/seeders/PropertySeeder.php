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
            'banner_image_url' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994',
            'title' => 'Modern Beach House',
            'description' => 'A stunning beach house with a panoramic ocean view.',
            'price' => 1200000.00,
            'rating' => 4.8,
            'location' => 'Malibu, USA',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1502672023488-70e25813eb80',
                'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg',
            'title' => 'Countryside Cottage',
            'description' => 'A cozy cottage in the serene countryside.',
            'price' => 350000.00,
            'rating' => 4.6,
            'location' => 'Surrey, UK',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg',
                'https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/18/14/29/house-1838544_960_720.jpg',
            'title' => 'Rustic Mountain Cabin',
            'description' => 'A charming cabin in the mountains, perfect for a getaway.',
            'price' => 450000.00,
            'rating' => 4.7,
            'location' => 'Aspen, USA',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/18/14/29/house-1838544_960_720.jpg',
                'https://cdn.pixabay.com/photo/2016/11/18/14/28/house-1838539_960_720.jpg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.unsplash.com/photo-1560185127-6a1865aa8bb6',
            'title' => 'Luxury City Penthouse',
            'description' => 'An upscale penthouse with a breathtaking city view.',
            'price' => 2500000.00,
            'rating' => 5.0,
            'location' => 'New York, USA',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1560185127-6a1865aa8bb6',
                'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg',
            'title' => 'Tropical Island Villa',
            'description' => 'A luxury villa on a secluded tropical island.',
            'price' => 3500000.00,
            'rating' => 4.9,
            'location' => 'Bahamas',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg',
                'https://images.pexels.com/photos/1643385/pexels-photo-1643385.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/29/03/20/ocean-1867285_960_720.jpg',
            'title' => 'Seaside Bungalow',
            'description' => 'A peaceful bungalow located right on the beach.',
            'price' => 600000.00,
            'rating' => 4.5,
            'location' => 'Maui, USA',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/29/03/20/ocean-1867285_960_720.jpg',
                'https://cdn.pixabay.com/photo/2015/11/03/09/03/beach-1021417_960_720.jpg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.unsplash.com/photo-1472224371017-08207f84aaae',
            'title' => 'Urban Loft',
            'description' => 'A stylish loft in the heart of the city, with modern amenities.',
            'price' => 900000.00,
            'rating' => 4.7,
            'location' => 'Chicago, USA',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1472224371017-08207f84aaae',
                'https://images.unsplash.com/photo-1484154218962-a197022b5858'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/259600/pexels-photo-259600.jpeg',
            'title' => 'Mountain Retreat Chalet',
            'description' => 'A cozy chalet in the mountains, perfect for winter getaways.',
            'price' => 800000.00,
            'rating' => 4.6,
            'location' => 'Alps, Switzerland',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/259600/pexels-photo-259600.jpeg',
                'https://images.pexels.com/photos/275765/pexels-photo-275765.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/29/05/31/architecture-1867321_960_720.jpg',
            'title' => 'Luxury Villa with Pool',
            'description' => 'A beautiful villa with a private pool and garden.',
            'price' => 2000000.00,
            'rating' => 4.9,
            'location' => 'Santorini, Greece',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/29/05/31/architecture-1867321_960_720.jpg',
                'https://cdn.pixabay.com/photo/2016/03/16/22/17/architecture-1266173_960_720.jpg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.unsplash.com/photo-1544473244-4a3835e958d2',
            'title' => 'Modern Glass House',
            'description' => 'A sleek, modern house with floor-to-ceiling windows.',
            'price' => 1750000.00,
            'rating' => 4.8,
            'location' => 'Palm Springs, USA',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1544473244-4a3835e958d2',
                'https://images.unsplash.com/photo-1551732323-b06c2c55fb92'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/37347/pexels-photo.jpg',
            'title' => 'Historic Townhouse',
            'description' => 'A charming historic townhouse with classic architecture.',
            'price' => 1100000.00,
            'rating' => 4.7,
            'location' => 'Boston, USA',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/37347/pexels-photo.jpg',
                'https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/29/01/44/cottage-1867256_960_720.jpg',
            'title' => 'Coastal Cottage',
            'description' => 'A quaint cottage with breathtaking coastal views.',
            'price' => 500000.00,
            'rating' => 4.5,
            'location' => 'Cornwall, UK',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/29/01/44/cottage-1867256_960_720.jpg',
                'https://cdn.pixabay.com/photo/2017/01/19/14/29/homes-1990364_960_720.jpg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.unsplash.com/photo-1515253028779-d4fd3a0a5f34',
            'title' => 'Riverside Mansion',
            'description' => 'A luxurious mansion with a private riverfront.',
            'price' => 3000000.00,
            'rating' => 4.9,
            'location' => 'Paris, France',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1515253028779-d4fd3a0a5f34',
                'https://images.unsplash.com/photo-1536152473798-59f9e36619af'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/221506/pexels-photo-221506.jpeg',
            'title' => 'Desert Oasis',
            'description' => 'A unique desert home with a beautiful oasis garden.',
            'price' => 850000.00,
            'rating' => 4.6,
            'location' => 'Phoenix, USA',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/221506/pexels-photo-221506.jpeg',
                'https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/29/02/23/interior-1867267_960_720.jpg',
            'title' => 'Lakeside Cabin',
            'description' => 'A peaceful lakeside cabin surrounded by nature.',
            'price' => 450000.00,
            'rating' => 4.7,
            'location' => 'Lake Tahoe, USA',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/29/02/23/interior-1867267_960_720.jpg',
                'https://cdn.pixabay.com/photo/2016/11/29/03/16/forest-1867275_960_720.jpg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.unsplash.com/photo-1507089947368-19c1da9775ae',
            'title' => 'Charming Bungalow',
            'description' => 'A charming bungalow with a beautiful garden.',
            'price' => 550000.00,
            'rating' => 4.5,
            'location' => 'Sydney, Australia',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1507089947368-19c1da9775ae',
                'https://images.unsplash.com/photo-1512917774080-9991f1c4c750'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/1648774/pexels-photo-1648774.jpeg',
            'title' => 'Modern Farmhouse',
            'description' => 'A modern farmhouse with rustic charm and modern amenities.',
            'price' => 1000000.00,
            'rating' => 4.8,
            'location' => 'Nashville, USA',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/1648774/pexels-photo-1648774.jpeg',
                'https://images.pexels.com/photos/1643385/pexels-photo-1643385.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/29/03/19/home-1867284_960_720.jpg',
            'title' => 'Gothic Mansion',
            'description' => 'A historic gothic mansion with unique architecture.',
            'price' => 2750000.00,
            'rating' => 4.9,
            'location' => 'Edinburgh, Scotland',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/29/03/19/home-1867284_960_720.jpg',
                'https://cdn.pixabay.com/photo/2015/11/03/09/03/beach-1021417_960_720.jpg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.unsplash.com/photo-1523755231516-e43fd2e8dca5',
            'title' => 'Mediterranean Villa',
            'description' => 'A Mediterranean-style villa with beautiful gardens.',
            'price' => 1900000.00,
            'rating' => 4.8,
            'location' => 'Tuscany, Italy',
            'images_url' => json_encode([
                'https://images.unsplash.com/photo-1523755231516-e43fd2e8dca5',
                'https://images.unsplash.com/photo-1507089947368-19c1da9775ae'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg',
            'title' => 'Victorian House',
            'description' => 'A beautifully restored Victorian house with classic charm.',
            'price' => 1300000.00,
            'rating' => 4.7,
            'location' => 'London, UK',
            'images_url' => json_encode([
                'https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg',
                'https://images.pexels.com/photos/221506/pexels-photo-221506.jpeg'
            ])
        ]);
        
        Property::create([
            'banner_image_url' => 'https://cdn.pixabay.com/photo/2016/11/29/12/50/santorini-1867294_960_720.jpg',
            'title' => 'Greek Island Villa',
            'description' => 'A stunning villa on a Greek island with views of the sea.',
            'price' => 2200000.00,
            'rating' => 4.9,
            'location' => 'Mykonos, Greece',
            'images_url' => json_encode([
                'https://cdn.pixabay.com/photo/2016/11/29/12/50/santorini-1867294_960_720.jpg',
                'https://cdn.pixabay.com/photo/2016/11/29/05/31/architecture-1867321_960_720.jpg'
            ])
        ]);
        
    }
}
