<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_commandes')->insert([
            ["nomStatusCommande" => "Livrée"],
            ["nomStatusCommande" => "Pas livrée"]
        ]);
    }
}
