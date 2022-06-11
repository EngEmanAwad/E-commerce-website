<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class allcartproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('add_carts')->insert([
            [
                'productName'=>'blouse' ,
                'desc'=>'women floral blouse' ,
                'img'=>' https://images.app.goo.gl/KW5Tu7wXdDiALvwQ9',
                'quantity'=>"300",
                'price'=>'800',
                'category'=>'women' ,
                'username'=>'',
                'user_id'=>'1',
          
        ],
        [

            'productName'=>'blouse' ,
            'desc'=>'women blue stripped blouse' ,
            'img'=>' https://images.app.goo.gl/KW5Tu7wXdDiALvwQ9',
            'quantity'=>"100",
            'price'=>'500',
            'category'=>'women' ,
            'username'=>'',
            'user_id'=>'2',

        ],

        [

            'productName'=>'pink jacket' ,
                'desc'=>'women winter pink blouse' ,
                'img'=>' https://images.app.goo.gl/KW5Tu7wXdDiALvwQ9',
                'quantity'=>"900",
                'price'=>'500',
                'category'=>'women' ,
                'username'=>'',
                'user_id'=>'3',

        ],

        [

            'productName'=>'pullover' ,
            'desc'=>'women white wool pullover' ,
            'img'=>' https://images.app.goo.gl/KW5Tu7wXdDiALvwQ9',
            'quantity'=>"1000",
            'price'=>'500',
            'category'=>'women' ,
            'username'=>'',
            'user_id'=>'4',
        ],





    ]);









































    }
}
