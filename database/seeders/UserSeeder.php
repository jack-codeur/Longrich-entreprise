<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                "nom" => 'Young Of Longrich',
                "nmeroTel" => '0748548680',
                'email' => 'youngoflongrich@gmail.com',
                'password' => Hash::make('1234')
            ],
        );
    }
}
