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
                'image' => 'frontend/assets/images/partner2.jpg'
            ],
            [
                'nom' => 'Partenaire B',
                'image' => 'frontend/assets/images/partner4.jpg'
            ],
            [
                'nom' => 'Partenaire C',
                'image' => 'frontend/assets/images/partner6.png'
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
