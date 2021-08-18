<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productname' => 'T-shirt Ajax',
            'price' => 59.99,
            'description' => 'T-shirt van de nederlandse club Ajax',
            'image' => 'img/ajax.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Feyenoord',
            'price' => 49.99,
            'description' => 'T-shirt van de nederlandse club Feyenoord',
            'image' => 'img/feyenoord.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt PSV',
            'price' => 59.99,
            'description' => 'T-shirt van de nederlandse club PSV',
            'image' => 'img/psv.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Nederland',
            'price' => 79.99,
            'description' => 'T-shirt van de Nederland',
            'image' => 'img/nederland.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt FC Barcelona',
            'price' => 79.99,
            'description' => 'T-shirt van de spaanse club FC Barcelona',
            'image' => 'img/barcelona.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Real Madrid',
            'price' => 79.99,
            'description' => 'T-shirt van de spaanse club Real Madrid',
            'image' => 'img/realmadrid.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Chelsea',
            'price' => 49.99,
            'description' => 'T-shirt van de engelse club Chelsea',
            'image' => 'img/chelsea.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Liverpool',
            'price' => 69.99,
            'description' => 'T-shirt van de engelse club Liverpool',
            'image' => 'img/liverpool.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Inter Milan',
            'price' => 49.99,
            'description' => 'T-shirt van de italiaanse club Inter Milan',
            'image' => 'img/intermilan.jpg',
        ]);

        DB::table('products')->insert([
            'productname' => 'T-shirt Juventus',
            'price' => 69.99,
            'description' => 'T-shirt van de italiaanse club Juventus',
            'image' => 'img/juventus.jpg',
        ]);
    }
}
