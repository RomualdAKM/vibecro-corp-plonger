<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TroisiemeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $troisiemes = [
            ['Bienvenu sur notre applications', 'En effet, nous diminuons au minimum, grâce à notre travail, notre responsabilité, En effet,
            nous diminuons au minimum, grâce à notre travail, notre responsabilitéEn effet, 
               nous diminuons au minimum, grâce à notre travail, notre responsabilitésauf','Équipementss de natation',
               'Événement de plongée mensuel','Équipementss de natation','fr'],
            ['Welcome to our application', 'In fact, we reduce our responsibility to a 
                minimum through our work,In fact, we reduce our responsibility to a minimum 
                through our work,In fact, we reduce our responsibility to a ','Scuba diving equipment','Monthly diving event','Equipmentss of scuba diving','en'],
       ];
       for ($i = 0; $i < count($troisiemes); $i++) {
            DB::table('troisiemesections')->insert(
                ['titre' => $troisiemes[$i][0], 'description' => $troisiemes[$i][1],
                    'titrelment1' => $troisiemes[$i][2],
                    'titrelment2' => $troisiemes[$i][3],
                    'titrelment3' => $troisiemes[$i][4],
                    'langue' => $troisiemes[$i][5]]
            );
       }
    }
}

