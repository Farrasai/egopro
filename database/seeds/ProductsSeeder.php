<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'SONY A7 III',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '340000',
            'image' => 'media/products/sony_a7_III.jpg',
            'product_detail' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse quod corrupti omnis laborum vero. Aut, quisquam aspernatur? Commodi, quas voluptates!',
            'kode_barang' => 'BRG001',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SONY LENS 70-200mm F4 G',
            'quality' => 'Baru',
            'product_quantity' => '15',
            'price' => '170000',
            'image' => 'media/products/SONY_LENS_70-200mm_F4_G.jpg',
            'product_detail' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse quod corrupti omnis laborum vero. Aut, quisquam aspernatur? Commodi, quas voluptates!',
            'kode_barang' => 'BRG002',

        ]);

        DB::table('products')->insert([
            'category_Id' => '2',
            'product_name' => 'ZOOM H4n PRO',
            'quality' => 'Baru',
            'product_quantity' => '5',
            'price' => '100000',
            'image' => 'media/products/ZOOM_H4n_PRO.jpg',
            'product_detail' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse quod corrupti omnis laborum vero. Aut, quisquam aspernatur? Commodi, quas voluptates!',
            'kode_barang' => 'BRG003',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'GOPRO HERO 4',
            'jenis' => 'Silver Edition',
            'quality' => 'Baru',
            'product_quantity' => '5',
            'price' => '70000',
            'image' => 'media/products/gopro_hero_4.jpg',
            'product_detail' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse quod corrupti omnis laborum vero. Aut, quisquam aspernatur? Commodi, quas voluptates!',
            'kode_barang' => 'BRG004',
        ]);
    }
}
