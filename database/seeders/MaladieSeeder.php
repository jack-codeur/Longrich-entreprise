<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaladieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maladies')->insert([
            ["nom" => "Cataracte"], ["nom" => "Cancer du col de l'utérus"],
            ["nom" => "Cardio vasculaire"], ["nom" => "Diabète de type 1"],
            ["nom" => "Diabète de type 2"], ["nom" => "Fibrome"],
            ["nom" => "Infection de l'oreille"], ["nom" => "Glaucome"],
            ["nom" => "Gonococie"], ["nom" => "Hypertension"],
            ["nom" => "Leucemie"], ["nom" => "Impuissance sexuelle"],
            ["nom" => "Faible de sucre dans le sang"], ["nom" => "Maladie renal ( maladie de riens )"],
            ["nom" => "Problème de monopse"], ["nom" => "Hepatite ( problème dans le foie )"],
            ["nom" => "Faible taux d'umminité"], ["nom" => "Ulcère de la bouche / saignement"],
            ["nom" => "Paludisme"], ["nom" => "Migraine, mal de tête"],
            ["nom" => "Tumeur ovarienne"], ["nom" => "Hematie"],
            ["nom" => "Douleur articlaire"], ["nom" => "Syphilis"],
            ["nom" => "Prostate"], ["nom" => "Ulcère"],
            ["nom" => "Infection vaginale"], ["nom" => "Peau malsaine"],
            ["nom" => "staphilocoque"], ["nom" => "mal de dent"],
            ["nom" => "Rhumatisme"], ["nom" => "Infection des voie urinaire"],
            ["nom" => "Infertilité masculine"], ["nom" => "Taux de cholesterol élévé"],
            ["nom" => "Chute des cheveux"], "nom" => ["Inflamation du colon"],
            ["nom" => "Maladie vasculaire biliaire"], ["nom" => "Dysenterie"],
            ["nom" => "Mauvaise haleine"],  ["nom" => "Asthme"],
            ["nom" => "mal de poitrine"], ["nom" => "Odeurs corporelle"],
            ["nom" => "Eczema"],  ["nom" => "Infertilité feminine"],
            ["nom" => "Fracture des os"], ["nom" => "Fatigue générale"],
            ["nom" => "Lèpre"], ["nom" => "Cicatrice"],
            ["nom" => "Perte de mémoire"], ["nom" => "AVC"], ["nom" => "VIH"],
            ["nom" => "Bouton sur le visage et le corps"]

        ]);
    }
}
