<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            [
                'nom' => 'EIFFAGE',
                'image' => 'frontend/assets/images/png/1.png'
            ],
            [
                'nom' => 'HNRB',
                'image' => 'frontend/assets/images/png/2.png'
            ],
            [
                'nom' => 'COLAS',
                'image' => 'frontend/assets/images/png/3.png'
            ],
            [
                'nom' => 'DYJESCK MAURI',
                'image' => 'frontend/assets/images/png/4.png'
            ],
            [
                'nom' => 'FHC MEDICA',
                'image' => 'frontend/assets/images/png/5.png'
            ],
            [
                'nom' => 'SIPI',
                'image' => 'frontend/assets/images/png/6.png'
            ],
            [
                'nom' => 'WISDOM GENERAL CONSTRUCTION',
                'image' => 'frontend/assets/images/png/7.png'
            ],
            [
                'nom' => 'YATT & CO',
                'image' => 'frontend/assets/images/png/8.png'
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
