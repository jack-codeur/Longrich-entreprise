<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Maladie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(TypeArticleSeeder::class);
        $this->call(StatusCommandeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(MaladieSeeder::class);
        $this->call(UserSeeder::class);

        // User::factory(1)->create();
        // Article::factory(15)->create();
        Produit::factory(15)->create();


            User::find(1)->roles()->attach(1);

    }
}
