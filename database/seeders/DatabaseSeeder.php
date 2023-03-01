<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run() 
    {
       
        
        DB::table('consultations')->insert([
            [
                'name' => 'dyell Darunday',
                'email' => '1901102087@gmail.com',
                'phone' => "12312312312321",
                'message' => "I love rey mac",
            ],
            [
                'name' => 'Dylene Darunday',
                'email' => '1901102087@gmail.com',
                'phone' => "12312312312321",
                'message' => "I love rey mac",
            ],

        ]);
    }
}
