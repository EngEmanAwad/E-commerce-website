<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class featuresproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('features')->insert([
            [
          'fname'=>'blouse' ,
          'fprice'=>'500' ,
          'fcategory'=>'women' ,
          'fdesc'=>'women floral blouse' ,
          'fquantity'=>"100",
          'fsizes'=>'S',
          'User'=>'1',
          'fgallery'=> ' https://images.app.goo.gl/KW5Tu7wXdDiALvwQ9',
          
        ],
        [

            'fname'=>'blouse' ,
            'fprice'=>'1000' ,
            'fcategory'=>'women' ,
            'fdesc'=>'women blue stripped blouse' ,
            'fquantity'=>"100",
            'fsizes'=>"S",
            'User'=>'2',
            'fgallery'=> 'https://images.app.goo.gl/fuAGb2yZGcuciGvA6',

        ],

        [

            'fname'=>'jacket' ,
            'fprice'=>'1000' ,
            'fcategory'=>'women' ,
            'fdesc'=>'women pink jacket' ,
            'fquantity'=>"100",
            'fsizes'=>"S",
            'User'=>'3',
            'fgallery'=> 'https://images.app.goo.gl/Te8juRVwJtPPBtB3A',

        ],

        [

            'fname'=>'pullover' ,
            'fprice'=>'600' ,
            'fcategory'=>'women' ,
            'fdesc'=>'women white pullover' ,
            'fquantity'=>"100",
            'fsizes'=>"S",
            'User'=>'14',
            'fgallery'=> 'https://images.app.goo.gl/cfQzk3Mi8qdUxT5TA',

        ],





    ]);


























    }
}
