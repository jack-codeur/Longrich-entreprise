<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_articles')->insert([
            ["nomTypeArticle" => "Santé"],
            ["nomTypeArticle" => "Soins et beauté"],
            ["nomTypeArticle" => "Hygiéne et traitement"],
            ["nomTypeArticle" => "Spécial Bébé"],
            ["nomTypeArticle" => "Ordinateurs"],
            ["nomTypeArticle" => "Accessoirs"],
        ]);
    }
}
