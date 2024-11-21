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
                'image' => 'assets/img/banners/header1.jpg',
            ],
            [
                'image' => 'assets/img/banners/header2.jpg',
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
