<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $achievements = [
            [
                'title' => 'Construction d’un complexe résidentiel de luxe',
                'image' => 'frontend/assets/images/1.webp',
                'description' => '<p>Notre entreprise a mené à bien la construction d’un complexe résidentiel de luxe comprenant 50 unités d’habitation, des espaces verts, des piscines et des aires de loisirs. Le projet, situé dans un cadre idyllique, a nécessité l\'utilisation de matériaux de haute qualité et un respect strict des normes environnementales.</p>
                              <p>Les étapes de construction ont inclus l’aménagement du terrain, la réalisation des fondations profondes, et l\'installation de systèmes écologiques d\'approvisionnement en énergie. Grâce à une équipe d\'experts, ce complexe est devenu une référence en matière de développement résidentiel durable.</p>'
            ],
            [
                'title' => 'Rénovation de bâtiments historiques',
                'image' => 'frontend/assets/images/2.webp',
                'description' => '<p>Ce projet de rénovation a consisté à restaurer trois bâtiments historiques classés dans le centre-ville, tout en respectant l’architecture d’origine. Nos équipes ont dû adapter les méthodes modernes de construction pour préserver l’authenticité de ces bâtiments emblématiques.</p>
                              <p>Les travaux ont compris la réhabilitation des façades, la consolidation des fondations, ainsi que l\'installation de nouvelles infrastructures internes telles que le système de chauffage et les réseaux électriques, afin de répondre aux standards actuels tout en préservant l\'esprit du patrimoine.</p>'
            ],
            [
                'title' => 'Construction d\'une usine de production',
                'image' => 'frontend/assets/images/3.webp',
                'description' => '<p>Notre entreprise a réalisé la construction d’une usine de production moderne de 10 000 m², équipée de toutes les infrastructures nécessaires pour une production efficace et respectueuse des normes environnementales. Située dans une zone industrielle, cette usine répond aux besoins de l’industrie en matière de logistique et de sécurité.</p>
                              <p>Les travaux incluaient l\'installation d\'une toiture isolante, de panneaux solaires pour l\'autonomie énergétique, et d\'un système de traitement des eaux usées. Ce projet a été mené à bien en respectant les délais et les normes de qualité du secteur.</p>'
            ],
            [
                'title' => 'Aménagement d’un parc urbain',
                'image' => 'frontend/assets/images/4.webp',
                'description' => '<p>Notre entreprise a été sélectionnée pour aménager un parc urbain de 5 hectares, intégrant des aires de jeux pour enfants, des pistes de jogging, des espaces verts et des installations pour les loisirs de plein air. Ce projet visait à offrir un espace de détente pour les habitants du quartier tout en contribuant à l\'écosystème local.</p>
                              <p>Les travaux ont inclus la plantation de plus de 200 arbres, la construction de chemins pavés, ainsi que l\'installation de systèmes d\'éclairage écologiques. Ce parc est devenu un lieu prisé par les résidents pour ses installations et son cadre naturel.</p>'
            ],
            [
                'title' => 'Réalisation d’un centre commercial moderne',
                'image' => 'frontend/assets/images/5.webp',
                'description' => '<p>La construction de ce centre commercial a été l’un de nos plus grands projets. Avec une superficie de 20 000 m², il comprend plus de 100 magasins, un espace de restauration, et un parking de 500 places. Ce projet a demandé une coordination complexe pour répondre aux exigences des différents acteurs impliqués.</p>
                              <p>Les équipes ont veillé à l’installation de systèmes de sécurité incendie, à l\'aménagement des espaces pour l\'accessibilité, et à l\'intégration de systèmes de ventilation avancés. Ce centre commercial est devenu un point central d’attraction pour la ville.</p>'
            ]
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}
