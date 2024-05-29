<?php

namespace Database\Seeders;

use App\Models\Terrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('types')->insert([
            'name'=>'bail'
        ]);
        DB::table('types')->insert([
            'name'=>'titre foncier'
        ]);
        Terrain::factory(40)->create();

    }
}
