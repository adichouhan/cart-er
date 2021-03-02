<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => "MEN'S BETTER THAN NAKED & JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 21,
                'sku'   => 'mens-better',
                'price' => 200.10,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            
            ],
            [
                'name' => "WOMEN'S BETTER THAN NAKED™ JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 400,
                'sku'   => 'womens-better',
                'price' => 1600.21,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
            ],
            [
                'name' => "WOMEN'S SINGLE-TRACK SHOE",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'sku'   => 'womens-single-track',
                'price' => 378.00,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
            ],
            [
                'name' => 'Enduro Boa® Hydration Pack',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'sku'   => 'edura-track',
                'price' => 21.10,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
            ]
        ];

        \DB::table('products')->insert($products);
    }
}