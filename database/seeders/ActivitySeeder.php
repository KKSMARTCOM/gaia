<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'name' => 'Essais et sondages géotechniques',
                'image' => 'frontend/assets/images/etude.jpg',
                'description' => '<p><ul>
                <li>Les essais géotechniques pour les bâtiments et les routes</li>
                <li>Les essais de contrôle qualité des matériaux mis en œuvre sur les chantiers de construction (sols, granulats, bétons)</li>
                <li>Les essais de contrôle et de suivi de l’exécution des travaux routiers (réception des couches de remblai, terrassements et corps de chaussées)</li>
                <li>La prospection de matériaux</li>
                <li>Les recherches de carrière de roches massives, d’emprunts de matériaux (silteux, latéritiques,) pour les routes</li>
                </ul></p>',
            ],
            [
                'name' => 'Essais de Laboratoire',
                'image' => 'frontend/assets/images/etude.jpg',
                'description' => '<p>LABORATOIRES GAIA propose d’accompagner ses clients sur les essais à réaliser sur les matériaux de construction ( sol, granulats, béton, enrobé, etc. ) Les essais de laboratoire que ou proposons sont les suivants :</p>
                <p><ul>
                <li>Teneur en eau;</li>
                <li>Analyse granulométrique sur granulats et sols;</li>
                <li>Limite d’Atterberg;</li>
                <li>Proctor normal;</li>
                <li>Proctor Modifié;</li>
                <li>Essai de CBR;</li>
                <li>Essai Los Angeles;</li>
                <li>Essai d’équivalence de Sable;</li>
                <li>Poids volumique sur granulats et sols;</li>
                <li>Cisaillement;</li>
                <li>Oedométrie;</li>
                <li>Compression simple sur béton, sol ciment, agglo, etc...</li>
                </ul></p>',
            ],
            [
                'name' => 'Etudes géotechniques',
                'image' => 'frontend/assets/images/etude.jpg',
                'description' => '<p>Nous proposons :</p>
                <p><ul>
                <li>Détermination de capacité portante et tassements de fondations superficielles</li>
                <li>Dimensionnement de fondations profondes pour les bâtiments et ouvrages d’art</li>
                <li>Vérification de stabilité des talus</li>
                <li>Dimensionnement des chaussées et plateformes logistiques</li>
                </ul></p>',
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}
