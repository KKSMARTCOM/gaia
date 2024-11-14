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
            'title' => 'À propos de nous',
            'image' => 'assets/img/banners/about.jpg',
            'description' => '<p>Bienvenue dans notre organisation. Nous nous engageons à fournir des services de qualité.</p><img src="https://via.placeholder.com/150" alt="Image d\'exemple">',
        ]);
    }
}
