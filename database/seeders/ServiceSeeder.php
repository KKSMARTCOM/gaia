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
                'title' => 'Étude de sol standard',
                'image' => 'assets/img/services/etude.png',
                'description' => 'Étude de sol de base pour évaluer la stabilité du terrain.',
                'base_price' => 250000,
            ],
            [
                'title' => 'Analyse géotechnique approfondie',
                'image' => 'assets/img/services/etude.png',
                'description' => 'Analyse complète de la composition du sol pour des constructions complexes.',
                'base_price' => 400000,
            ],
            [
                'title' => 'Préparation du site pour construction',
                'image' => 'assets/img/services/etude.png',
                'description' => 'Préparation et étude de la viabilité du sol pour une fondation durable.',
                'base_price' => 350000,
            ],
        ];

        foreach ($services as $serviceData) {
            $service = Service::create($serviceData);

            $communes = Commune::all();

            foreach ($communes as $commune) {
                $additionalPrice = rand(50000, 150000);
                $service->communes()->attach($commune->id, ['additional_price' => $additionalPrice]);
            }
        }
    }
}
