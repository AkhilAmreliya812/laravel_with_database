<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       DB::table('workers')->insert([
        'name' => 'Anjali Raichura',
        'email' => 'anjali@gmail.com',
        'city' => 'vejalpur 2'
       ]);
    }
}
