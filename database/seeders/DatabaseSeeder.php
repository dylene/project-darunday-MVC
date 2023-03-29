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
       
        
        DB::table('modals')->insert([
            [
                'id'        => '1',
                'title'     => 'Product 1',
                'desc'      => 'Lorem ipsum, dolor sit amet consectetur',
                'image'     => 'assets/img/portfolio/product-1.jpg',
            ]
        ]);
        DB::table('modals')->insert([
            [
                'id'        => '2',
                'title'     => 'Product 2',
                'desc'      => 'Lorem ipsum, dolor sit amet consectetur',
                'image'     => 'assets/img/portfolio/product-2.jpg',
            ]

        ]);
        DB::table('modals')->insert([
            [
                'id'        => '3', 
                'title'     => 'Product 3',
                'desc'      => 'Lorem ipsum, dolor sit amet consectetur',
                'image'     => 'assets/img/portfolio/product-3.jpg',
            ]

        ]);
    }
}
