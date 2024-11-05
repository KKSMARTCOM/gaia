<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jobs = [
            [
                'title' => 'Ingénieur(e) Géotechnicien(ne) confirmé(e) F/H LISSES',
                'description' => '<p>Type de contrat : CDI<br>Type d’emploi : Temps plein<br>Niveau d’étude souhaité : BAC+5 et plus<br>Expérience : Confirmé<br>Lieu : 5, rue Mona Lisa – 91090 LISSES<br>Salaire : A négocier selon vos compétences et votre expérience</p>
                              <p><strong>Missions du poste</strong><br>Préparations des chantiers d’investigations géotechniques (démarches administratives, fiches d’instructions et commandes,…) ;<br>Suivi des travaux d’investigations géotechniques et des équipes de sondages ;<br>Dépouillement et l’analyse des résultats de chantier ;<br>Rédaction des rapports, notes et avis géotechniques (missions G1 à G5) ;</p>
                              <p><strong>Exigences</strong><br>Maîtrise des logiciels de calcul habituels en géotechnique : FoXta, K-Réa, Talren ;<br>Une expérience en bureau d’études est un plus ;<br>Avoir un bon relationnel client ;<br>Savoir travailler en autonomie ;<br>Permis B obligatoire.<br>Vous vous reconnaissez dans cette offre ? Alors n’hésitez plus et rejoignez-nous !</p>
                              ',
                'email' => 'contact@gaialab.bj'
            ],
            [
                'title' => 'Technicien(ne) de Laboratoire Sols et Matériaux F/H PARIS',
                'description' => '<p>Type de contrat : CDI<br>Type d’emploi : Temps plein<br>Niveau d’étude souhaité : BAC+2 et plus<br>Expérience : Junior<br>Lieu : 10, rue du Pont Neuf – 75001 PARIS<br>Salaire : Selon profil</p>
                              <p><strong>Missions du poste</strong><br>Réalisation d’essais en laboratoire sur les sols et matériaux ;<br>Préparation des échantillons et analyse des résultats ;<br>Rédaction des rapports d’essais ;</p>
                              <p><strong>Exigences</strong><br>Connaissance des normes en géotechnique ;<br>Capacité à travailler en équipe ;<br>Permis B obligatoire.<br>Vous vous reconnaissez dans cette offre ? Rejoignez-nous !</p>
                              ',
                'email' => 'contact@gaialab.bj'
            ],
            [
                'title' => 'Chef de Projet Environnemental F/H MARSEILLE',
                'description' => '<p>Type de contrat : CDI<br>Type d’emploi : Temps plein<br>Niveau d’étude souhaité : BAC+5 et plus<br>Expérience : Confirmé<br>Lieu : 15, rue Paradis – 13001 MARSEILLE<br>Salaire : Selon expérience et compétences</p>
                              <p><strong>Missions du poste</strong><br>Gestion de projets environnementaux ;<br>Coordination des équipes et suivi de chantier ;<br>Rédaction des rapports environnementaux ;</p>
                              <p><strong>Exigences</strong><br>Expérience en gestion de projet ;<br>Bonne connaissance des réglementations environnementales ;<br>Permis B obligatoire.<br>Vous souhaitez rejoindre une équipe dynamique ? Postulez !</p>
                              ',
                'email' => 'contact@gaialab.bj'
            ],
            [
                'title' => 'Technicien(ne) Géotechnique F/H BORDEAUX',
                'description' => '<p>Type de contrat : CDI<br>Type d’emploi : Temps plein<br>Niveau d’étude souhaité : BAC+2 et plus<br>Expérience : Junior<br>Lieu : 8, rue des Chartrons – 33000 BORDEAUX<br>Salaire : A négocier</p>
                              <p><strong>Missions du poste</strong><br>Réalisation des investigations de terrain ;<br>Analyse des échantillons de sol ;<br>Rédaction de rapports de sondages ;</p>
                              <p><strong>Exigences</strong><br>Capacité d’analyse et de synthèse ;<br>Bon relationnel client ;<br>Permis B obligatoire.<br>Vous êtes motivé(e) ? Rejoignez-nous dès maintenant !</p>
                              ',
                'email' => 'contact@gaialab.bj'
            ]
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
