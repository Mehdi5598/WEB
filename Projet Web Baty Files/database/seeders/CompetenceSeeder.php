<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competences')->insert([
            ['name' => 'FullStack Web Development'],
            ['name' => 'Data Analysis'],
            ['name' => 'FullStack Mobile Development'],
            ['name' => 'Cyber Security'],
            ['name' => 'Data Scientist'],
            ['name' => 'Network'],
            ['name' => 'Machine Learning'],
        ]);
    }
}
