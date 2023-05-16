<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Coffee',
                'image' => 'https://www.simplejoy.com/wp-content/uploads/2012/06/iced_coffee_cocktail.jpg',
                'price' => 5,
                'description' => 'Biji kopi yang disangrai dan dihaluskan menjadi bubuk'
            ],
            [
                'name' => 'Mie Gebetan',
                'image' => 'https://img.freepik.com/free-photo/high-angle-tasty-composition-noodles-table_23-2148803860.jpg?w=360&t=st=1681187988~exp=1681188588~hmac=feda6a04be70f734cd4cd5a01d64f82d02000bb8e183d59ea1aaad8dd09c76a9',
                'price' => 8,
                'description' => 'Terbuat dari mie dan dibalur saus'
            ],
            [
                'name' => 'Es Teh',
                'image' => 'https://img.freepik.com/free-photo/ice-tea-with-mint_144627-41802.jpg?w=360&t=st=1681188492~exp=1681189092~hmac=4e22938c7666e26fab971bac71c521b63a3a650f42dfc625620925c9a0ac637f',
                'price' => 5,
                'description' => 'Dari pengolahan daun tanaman teh'
            ],
            [
                'name' => 'Mie Ayam',
                'image' => 'https://www.nibble.id/uploads/asal_usul_mie_ayam_01_0ace759bee.jpg',
                'price' => 10,
                'description' => 'Terbuat dari mi yang dibumbui daging ayam'
            ],
            [
                'name' => 'Seblak',
                'image' => 'https://ik.imagekit.io/tvlk/blog/2022/03/Resep-Seblak-Enak-Traveloka-Mart-3.jpg?tr=dpr-2,w-675',
                'price' => 5,
                'description' => 'Terbuat dari kerupuk basah bumbu halus'
            ],
            [
                'name' => 'Jus Strawberry',
                'image' => 'https://img.freepik.com/premium-photo/strawberry-juice-glass-wood-with-basket-strawberries-background_266402-1122.jpg?w=360',
                'price' => 5,
                'description' => 'Terbuat dari buah strawberry'
            ],
            [
                'name' => 'Bakso',
                'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2016/04/Resep-Bakso-urat.jpg?fit=1518%2C1920&ssl=1',
                'price' => 10,
                'description' => 'Terbuat dari daging sapi dan tepung tapioka'
            ],
            [
                'name' => 'Matcha',
                'image' => 'https://i.pinimg.com/564x/1e/61/cc/1e61cc0c7f06afc8ae7e58ebf865a8ea.jpg',
                'price' => 5,
                'description' => 'Terbuat dari chocolatos matcha'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}