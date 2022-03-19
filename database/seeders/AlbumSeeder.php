<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeds the database with 3 registers that are essential for the filter usability
        DB::table('albums')->insert([
            ['id' => 1, 'catalog' => '[DMX021]', 'artist' => 'Last Rhythm', 'name' => 'Sleepwalking', 'year' => 1993, 'gender' => 'house'],
            ['id' => 2, 'catalog' => '[OUT3483]', 'artist' => 'Last Rhythm', 'name' => 'Open Your Mind', 'year' => 1992, 'gender' => 'house'],
            ['id' => 3, 'catalog' => '[MESMOCD4]', 'artist' => 'Eat Static', 'name' => 'Prepare Your Spirit', 'year' => 2000, 'gender' => 'trance']
        ]);
    }
}
