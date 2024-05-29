<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Etudiant::create(['nom'=>'diop','prenom'=>'momo','age'=>23]);
      //  Etudiant::create(['nom'=>'diouf','prenom'=>'awa','age'=>19]);
         Etudiant::factory(10)->create();

        DB::table('etudiants')->insert([
            'nom'=>'diop',
            'prenom'=>'momo',
            'age'=>25
        ]);
    }
}
