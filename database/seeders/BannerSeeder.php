<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'welcome_text' => 'Welcome to shopery',
            'main_title' => 'Fresh & Healthy Organic Food',
            'subtitle' => 'Sale up to 30% OFF',
            'description' => 'Free shipping on all your order. we deliver, you enjoy',
            'image' => 'banners/sample-banner-1.jpg',
            'button_text' => 'Shop now',
            'button_link' => '/shop',
            'status' => true,
            'sort_order' => 1
        ]);

        Banner::create([
            'welcome_text' => 'Welcome to shopery',
            'main_title' => 'Fresh & Healthy Organic Food',
            'subtitle' => 'Sale up to 25% OFF',
            'description' => 'Free shipping on all your order. we deliver, you enjoy',
            'image' => 'banners/sample-banner-2.jpg',
            'button_text' => 'Shop now',
            'button_link' => '/shop',
            'status' => true,
            'sort_order' => 2
        ]);

        Banner::create([
            'welcome_text' => 'Welcome to shopery',
            'main_title' => 'Fresh & Healthy Organic Food',
            'subtitle' => 'Sale up to 40% OFF',
            'description' => 'Free shipping on all your order. we deliver, you enjoy',
            'image' => 'banners/sample-banner-3.jpg',
            'button_text' => 'Shop now',
            'button_link' => '/shop',
            'status' => false,
            'sort_order' => 3
        ]);
    }
}
