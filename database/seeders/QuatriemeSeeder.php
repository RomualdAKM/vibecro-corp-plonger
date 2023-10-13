<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuatriemeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $quatriemes = [
            ['Bienvenu sur notre applications', 'En effet, nous diminuons au minimum, grâce à notre travail, notre responsabilité, En effet,
            nous diminuons au minimum, grâce à notre travail, notre responsabilitéEn effet, 
               nous diminuons au minimum, grâce à notre travail, notre responsabilitésauf','fr'],
            ['Welcome to our application', 'In fact, we reduce our responsibility to a 
                minimum through our work,In fact, we reduce our responsibility to a minimum 
                through our work,In fact, we reduce our responsibility to a ','en'],
       ];
       for ($i = 0; $i < count($quatriemes); $i++) {
            DB::table('quatriemesections')->insert(
                ['titre' => $quatriemes[$i][0], 'description' => $quatriemes[$i][1], 'langue' => $quatriemes[$i][2]]
            );
       }
    }
}
