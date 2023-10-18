<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Création de l'admin
         DB::table('users')->insert([
            'nom' => 'Admin',
            'prenom' => 'Administrateur',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
        ]);
    }
}
