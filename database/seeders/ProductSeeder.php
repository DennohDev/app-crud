<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the products table with a realistic demo catalogue.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Wireless Mouse',               'qty' => 120, 'price' => 24.99,  'description' => 'Ergonomic 2.4GHz wireless mouse with silent clicks.'],
            ['name' => 'Mechanical Keyboard',          'qty' => 65,  'price' => 89.50,  'description' => 'Hot-swappable RGB mechanical keyboard with brown switches.'],
            ['name' => 'USB-C Hub',                    'qty' => 200, 'price' => 39.00,  'description' => '7-in-1 USB-C hub with HDMI, SD card reader and PD charging.'],
            ['name' => '27" 4K Monitor',               'qty' => 30,  'price' => 329.99, 'description' => 'IPS 4K UHD monitor with USB-C and a height-adjustable stand.'],
            ['name' => 'Noise-Cancelling Headphones',  'qty' => 48,  'price' => 199.00, 'description' => 'Over-ear ANC headphones with 30-hour battery life.'],
            ['name' => 'Laptop Stand',                 'qty' => 150, 'price' => 29.95,  'description' => 'Aluminium adjustable laptop stand for better posture.'],
            ['name' => 'Webcam 1080p',                 'qty' => 0,   'price' => 54.00,  'description' => 'Full-HD webcam with auto-focus and dual microphones.'],
            ['name' => '1TB Portable SSD',             'qty' => 85,  'price' => 119.99, 'description' => 'Shock-resistant USB 3.2 portable SSD rated at 1050MB/s.'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
