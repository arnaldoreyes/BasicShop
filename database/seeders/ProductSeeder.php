<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Nintendo Switch Oled',
                'price'=>'400',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati?',
                'category'=>'console',
                'gallery'=>'https://m.media-amazon.com/images/I/717+hg61LNL._AC_SL1500_.jpg',
            ],
            [
                'name'=>'Samsung Galaxy S22 Ultra',
                'price'=>'1200',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati?',
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/71PvHfU+pwL._SX679_.jpg',
            ],
            [
                'name'=>'LG Smart TV 50',
                'price'=>'550',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati?',
                'category'=>'TV',
                'gallery'=>'https://www.apple.com/newsroom/images/product/iphone/geo/Apple-iPhone-14-Pro-iPhone-14-Pro-Max-deep-purple-220907-geo_inline.jpg.large.jpg',
            ],
            [
                'name'=>'Samsung Sound Tower',
                'price'=>'700',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, obcaecati?',
                'category'=>'electronics',
                'gallery'=>'https://www.apple.com/newsroom/images/product/iphone/geo/Apple-iPhone-14-Pro-iPhone-14-Pro-Max-deep-purple-220907-geo_inline.jpg.large.jpg',
            ],
        ]);

    }
}
