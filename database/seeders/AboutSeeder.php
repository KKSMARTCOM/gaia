<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        About::create([
            'title' => 'Qui sommes nous ?',
            'image' => 'frontend/assets/images/about.png',
            'description' => '<p>Fondé en 2022, le Laboratoire GAIA est un établissement géotechnique novateur basé au Bénin, dédié à l’analyse approfondie des sols et des matériaux de construction. Notre mission est de fournir des services de qualité qui garantissent la sécurité et la durabilité des projets d\'infrastructure dans notre pays et au-delà. GAIA se distingue par son engagement envers l’excellence et l’innovation. Notre équipe d\'experts, formée aux dernières techniques d\'analyse, réalise une vaste gamme d\'essais géotechniques, allant des études de site aux tests en laboratoire. Nous collaborons étroitement avec des ingénieurs, architectes et promoteurs pour offrir des solutions adaptées et spécifiques à chaque projet.</p>',
        ]);
    }
}
