<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =[
            [
                'name'=>'Apple iPhone 8 plus',
                'details'=>'Front Camera: 10MP camera ƒ/2.2 aperture Memory: 256GB internal storage, 4GB RAM',
                'description'=>'Featuring New Glass and Aluminum Design, Retina HD Displays, A11 Bionic Chip, New Single and Dual Cameras with Support for Portrait Lighting, Wireless Charging and Optimized for Augmented Reality',
                'brand'=>'Apple',
                'price'=>11999,
                'shipping_cost'=>40,
                'image_path'=>'storage/product3.png'

            ],
            [
                'name'=>'MacBook Pro 13”',
                'details'=>'Up to 1.4x faster than M1 model2,Up to 6x faster than Intel-based mode',
                'description'=>'The new M2 chip makes the 13‑inch MacBook Pro more capable than ever. The same compact design supports up to 20 hours of battery life1 and an active cooling system to sustain enhanced performance. Featuring a brilliant Retina display, a FaceTime HD camera, and studio‑quality mics, it’s our most portable pro laptop.',
                'brand'=>'Apple',
                'price'=>39999,
                'shipping_cost'=>45,
                'image_path'=>'storage/product4.png'

            ]
        ];

        foreach($products as $key => $value){
            Product::create($value);

        }


    }
}
