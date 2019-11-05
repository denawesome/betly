<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games_type = [
            'CyberSport' => [
                'Dota 2', 'Fortnite', 'CS:GO'
            ],
            'Sport' => [
                'Football', 'Basketball', 'Tennis'
            ]
        ];
    }
}
