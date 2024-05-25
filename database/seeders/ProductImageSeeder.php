<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::truncate();

        $images = [
            [
                'product_id' => 1,
                'image' => 'product-img/goodiebag-blacucream.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 2,
                'image' => 'product-img/goodiebag-blacuputih-polyster.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 3,
                'image' => 'product-img/goodiebag-dinier-abu.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 4,
                'image' => 'product-img/goodiebag-dinier-biru.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 5,
                'image' => 'product-img/goodiebag-dinier-biru2.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 6,
                'image' => 'product-img/goodiebag-dinier-hijau.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 7,
                'image' => 'product-img/goodiebag-sphdl-birumuda.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 8,
                'image' => 'product-img/goodiebag-sphdlbox-merah.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 9,
                'image' => 'product-img/goodiebag-spoval-hitam.jpg',
                'image_order' => 1
            ],
            [
                'product_id' => 10,
                'image' => 'product-img/pouch-blacu.jpg',
                'image_order' => 1
            ],
        ];

        ProductImage::insert($images);
    }
}
