<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $communes = [
            'Cotonou',
            'Abomey-Calavi',
            'Porto-Novo',
            'Parakou',
            'Djougou',
            'Bohicon',
            'Kandi',
            'Lokossa',
            'Ouidah',
            'Abomey',
            'Natitingou',
            'Savalou',
            'Sakété',
            'Comè',
            'Malanville',
            'Dogbo',
            'Kétou',
            'Dassa-Zoumè',
            'Banikoara',
            'Pobè',
            'Nikki',
            'Covè',
            'Savè',
            'Tchaourou',
            'Bassila',
            'Bembèrèkè',
            'Kouandé',
            'Péhunco',
            'Tanguiéta',
            'Toffo',
            'Sô-Ava',
            'Athiémè',
            'Allada',
            'Glazoué',
            'Aplahoué',
            'Zè',
            'Zogbodomey',
            'Za-Kpota',
            'Ségbana',
            'Bantè',
            'Avrankou',
            'Adjohoun',
            'Toviklin',
            'Houéyogbé',
            'Ouèssè',
            'Lalo',
            'Djidja',
            'Ifangni',
            'N’dali',
            'Materi',
            'Copargo',
            'Agbangnizoun',
            'Zagnanado',
            'Djakotomey',
            'Ouinhi',
            'Gogounou',
            'Kalalè',
            'Boukoumbè',
            'M’Bergou',
            'Sinendé',
            'Sèmè-Podji',
            'Ouaké',
            'Pèrèrè',
            'Karimama',
            'Cobly',
            'Kpomassè',
            'Adjarra',
            'Gbanlin'
        ];

        foreach ($communes as $commune) {
            Commune::create([
                'name' => $commune,
            ]);
        }
    }
}
