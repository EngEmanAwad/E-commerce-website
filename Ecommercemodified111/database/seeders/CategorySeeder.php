<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->insert([
            array('catName' => 'women'),
            array('catName' => 'men'),
            array('catName' => 'kids'),
            array('catName' => 'footwear'),
            array('catName' => 'accessories'),
        ]);



    }
}
