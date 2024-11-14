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
                'nom' => 'Partenaire A',
                'image' => 'assets/img/banners/header1.jpg'
            ],
            [
                'nom' => 'Partenaire B',
                'image' => 'assets/img/banners/header1.jpg'
            ],
            [
                'nom' => 'Partenaire C',
                'image' => 'assets/img/banners/header2.jpg' 
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}