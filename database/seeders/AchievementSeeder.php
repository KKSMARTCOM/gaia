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
                'title' => 'ESSAI CPTU AU PORT AUTOMOMME DE COTONOU',
                'image' => 'frontend/assets/images/2.png',
                'description' => '<p>Dans le cadre du projet de réhabilitation du mur de l\'ancien quai du Port, nous avons réalisé des essais CPTu avant et après le vibro compactage d\'un remblai en sable afin d\’évaluer l’efficacité de la méthode. </p>
                <p>Les essais ont été réalisés sur une profondeur de 15 m à 20 m dont 14 m de remblai par endroit.</p>
                <p>L’essai CPTu (pénétromètre statique avec mesure de pression interstitielle), conforme à la norme NF EN ISO 22476-1 est une méthode très fiable de caractérisation géotechnique des sols. Ce test consiste en l’enfoncement d’une pointe électrique dans le sol pour mesurer divers paramètres clés permettant la détermination de la stratigraphique des sols à travers leur comportement, leur capacité portante et leur déformabilité (tassement). </p>
                <p>Les paramètres sont mesurés en continu (tous les 2 cm environ) et permettent donc de distinguer des lentilles ou poches de sol contrairement aux essais classiques (Essai pressiométrique, essais SPT, Pénétromètres dynamiques).</p>'
            ],
            [
                'title' => 'TRAVAUX D’ETUDES GEOTECHNIQUE A LA GDIZ GLO DJIGBE',
                'image' => 'frontend/assets/images/3.jpg',
                'description' => '<p>Dans le cadre du projet construction d\'un entrepôt de biscuits de 5000 m² dans la GDIZ, le laboratoire GAIA a été sollicité pour une étude G2 AVP afin d\'effectuer le prédimensionnement des fondations.</p>
                <p>Les activités de sondage ont inclut : des sondages au pénétromètre dynamique à l\'aide d\'un pénétromètre PAGANI ; des sondages au pénétromètre statique type CTPm avec un pénétromètre PAGANI et des reconnaissances du sous-sol par des sondages à la tarière. </p>
                <p>Nous exprimons notre sincère gratitude à l\'entreprise pour avoir placé sa confiance en nos équipes.</p>'
            ],
            [
                'title' => 'TRAVAUX D’ETUDES GEOTECHNIQUE SUR L’AXE PENESSOULOU – ALEDJO – SEMERE, COMMUNE DE OUAKE',
                'image' => 'frontend/assets/images/1.webp',
                'description' => '<p>Le Laboratoire GAIA a été mandaté pour la réalisation des études géotechniques de conception de 3 ponts sur l’Axe Pénéssoulou – Alédjo – Sèmèrè dans la commune de Ouaké, département de Donga. </p>
                <p>Ces ponts, mesurant entre 20m et 80m de long, doivent franchir respectivement la rivière OGOUGOU, un affluent de la rivière KARA, et la rivière KARA elle-même.</p>
                <p>En juin 2024, nos équipes ont mené les investigations suivantes à l\'aide d\'une sondeuse SD200/50 : Sondage Carotté : 54,5 mètres de sondage carotté ont été réalisés, dont 32,5 mètres dans des formations rocheuses. Les carottes prélevées ont été soumises à des essais en laboratoire pour analyser les propriétés des sols et des roches et les essais Pressiométriques : 54 mètres d’essais pressiométriques ont été effectués.</p>
                <p>Nous remercions l\'entreprise pour sa confiance et merci à toute l\'équipe pour cette mission réussie.</p>'
            ],
            [
                'title' => 'TRAVAUX D’ETUDES GEOTECHNIQUE AU CARREFOUR EREVAN',
                'image' => 'frontend/assets/images/3.jpg',
                'description' => '<p>Nous avons eu l’honneur de contribuer au projet de déplacement du monument Bio GUERA au carrefour EREVAN de Cotonou. </p>
                <p>Ensemble avec notre partenaire SIMG, nous avons mis en œuvre notre expertise géotechnique pour assurer la réussite de ce projet. </p>         
                <p>Merci à SIMG pour cette confiance ainsi qu\'à nos équipes pour leur travail !</p>'
            ],
            [
                'title' => 'TRAVAUX D’ETUDES GEOTECHNIQUE SEME KPODJI ',
                'image' => 'frontend/assets/images/4.webp',
                'description' => '<p>Nous sommes intervenus pour l\'entreprise BIOLYNX & TIC BENIN, dans le cadre d\'un projet d\'extension d\'usine sur une superficie de 2800m².</p>
                <p>Notre mission a été de réaliser des sondages géotechniques visant à apprécier les caractéristiques géotechniques du sol en place et à calculer la capacité portante du sol pour un dimensionnement des fondations. </p>
                <p>Les activités de sondage ont compris : des sondages au pénétromètre dynamique à l\'aide d\'un pénétromètre PAGANI et des sondages carottes et pressiométriques avec une sondeuse SD200/50 de marque PRODIA.</p>'
            ],
            [
                'title' => 'TRAVAUX D’ETUDES GEOTECHNIQUE A DEKOUNGBE',
                'image' => 'frontend/assets/images/6.webp',
                'description' => '<p>Dans le cadre du projet de construction d\'une station-service, les équipes de Laboratoires GAIA ont été missionnées pour réaliser des sondages géotechniques visant à apprécier les caractéristiques géotechniques du sol en place et à proposer des solutions de fondation.</p>
                <p>Les sondages ont été réalisés avec un pénétromètre stato-dynamique de marque PAGANI TG 63-150 et sont constitués : des sondages au pénétromètre dynamique ; des sondages au pénétromètre statique à pointe mécanique et des sondages à la tarière.</p>'
            ]
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}
