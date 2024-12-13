<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $banners = [
            [
                'image' => 'frontend/assets/images/png/b1.jpg',
            ],
            [
                'image' => 'frontend/assets/images/png/b2.jpg',
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
