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

    // ************** Multiple data insert ***********************
    //    DB::table('workers')->insert([
    //     ['name' => 'Akhil Amreliya','email' => 'akhil@gmail.com','city' => 'Ahmedabad'],
    //     ['name' => 'Harsh Patel','email' => 'harsh@gmail.com','city' => 'Vejalpur'],
    //     ['name' => 'Bhupat Vatukiya','email' => 'bhupat@gmail.com','city' => 'Bavla']
    // ]);

    // ************** Single data insert ***********************
    // DB::table('workers')->insert([
    //     'name' => 'Bhupat Vatukiya','email' => 'bhupat@gmail.com','city' => 'Bavla'
    // ]);

    // ************** Multipl data insert another way ***********************
    $workers = [
        ['name' => 'Akhil Amreliya','email' => 'akhil@gmail.com','city' => 'Ahmedabad'],
        ['name' => 'Harsh Patel','email' => 'harsh@gmail.com','city' => 'Vejalpur'],
        ['name' => 'Bhupat Vatukiya','email' => 'bhupat@gmail.com','city' => 'Bavla']
    ];

    DB::table('workers')->insert($workers);
    }
}
