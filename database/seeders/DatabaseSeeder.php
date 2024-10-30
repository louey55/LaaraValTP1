<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classe;
use App\Models\Etudiant;

class DatabaseSeeder extends Seeder
{
    public function run()
    {    $this->call(ClassesTableSeeder::class);
        // Ajout d'une classe
         Etudiant::Factory(30)->create();
       
}
}