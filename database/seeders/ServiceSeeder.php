<?php

namespace Database\Seeders;

use App\Models\Commune;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $services = [
            [
                'title' => 'Étude de sol pour les bâtiments',
                'image' => 'frontend/assets/images/etude.jpg',
                'description' => '4 Sondages pénétromètres dynamiques a 10 m de profondeur;
1 sondage pénétromètre statique à pointe mécanique à 10 m ou au refus;
1 sondage à la tarière de 3 à 5 m et essais de laboratoire sur les matériaux prélevés.',
            ]
        ];

        foreach ($services as $serviceData) {
            $service = Service::create($serviceData);

            $communes = Commune::all();

            foreach ($communes as $commune) {
                $service->communes()->attach($commune->id);
            }
        }
    }
}
