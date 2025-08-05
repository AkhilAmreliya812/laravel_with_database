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

        $workers = [
            ['name' => 'Akhil Amreliya','email' => 'akhil@gmail.com','city' => 'Ahmedabad'],
            ['name' => 'Harsh Patel','email' => 'harsh@gmail.com','city' => 'Vejalpur'],
            ['name' => 'Bhupat Vatukiya','email' => 'bhupat@gmail.com','city' => 'Bavla']
        ];

       DB::table('workers')->insert($workers);
    }
}
