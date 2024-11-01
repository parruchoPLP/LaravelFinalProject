<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [ 'name' => 'Apple iPhone 11', 'price' => 'Php 24,990', 'rating' => '★★★★☆','image' => 'images/products/iPhone-11.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 12', 'price' => 'Php 30,990', 'rating' => '★★★★☆','image' => 'images/products/iPhone-12.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 13', 'price' => 'Php 42,990', 'rating' => '★★★★☆','image' => 'images/products/iPhone-13.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 14 Plus', 'price' => 'Php 56,990', 'rating' => '★★★★★','image' => 'images/products/iPhone-14-Plus.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 14', 'price' => 'Php 49,990', 'rating' => '★★★★☆','image' => 'images/products/iPhone-14.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15 Plus', 'price' => 'Php 63,990', 'rating' => '★★★★★','image' => 'images/products/iPhone-15-Plus.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15 Pro Max', 'price' => 'Php 84,990', 'rating' => '★★★★★','image' => 'images/products/iPhone-15-Pro-Max.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15 Pro', 'price' => 'Php 70,990', 'rating' => '★★★★★','image' => 'images/products/iPhone-15-Pro.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15', 'price' => 'Php 56,990', 'rating' => '★★★★☆','image' => 'images/products/iPhone-15.png','brand' => 'Apple'],
            [ 'name' => 'Apple iPhone SE 3rd Gen 2022', 'price' => 'Php 33,990', 'rating' => '★★★☆☆','image' => 'images/products/iPhone-SE-3rd-gen-2022.png','brand' => 'Apple'],
            [ 'name' => 'Vivo Y100', 'price' => 'Php 12,499', 'rating' => '★★★★☆','image' => 'images/products/vivo-Y100.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo Y27s', 'price' => 'Php 9,999', 'rating' => '★★★★★','image' => 'images/products/vivo-Y27s.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo Y17s', 'price' => 'Php 6,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-Y17s.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo Y03', 'price' => 'Php 3,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-Y03.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V30e 5G', 'price' => 'Php 17,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-V30e-5G.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V30 Pro 5G', 'price' => 'Php 34,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-V30-Pro-5G.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V30 5G', 'price' => 'Php 24,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-V30-5G.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V29e 5G', 'price' => 'Php 19,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-V29e-5G.png', 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V29 5G', 'price' => 'Php 24,999', 'rating' => '★★★★☆','image' => 'images/products/vivo-V29-5G.png', 'brand' => 'Vivo'],
            [ 'name' => 'Xiaomi Poco F6', 'price' => 'Php 18,799', 'rating' => '★★★★☆','image' => 'images/products/POCO-F6.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi A3', 'price' => 'Php 3,399', 'rating' => '★★★★☆','image' => 'images/products/Redmi-A3.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13', 'price' => 'Php 7,999', 'rating' => '★★★★☆','image' => 'images/products/Redmi-Note-13.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi 13T', 'price' => 'Php 26,999', 'rating' => '★★★★☆', 'image' => 'images/products/Xiaomi-13T.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi 14', 'price' => 'Php 45,999', 'rating' => '★★★★☆',  'image' => 'images/products/Xiaomi-14.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13 Pro', 'price' => 'Php 13,999', 'rating' => '★★★★☆',  'image' => 'images/products/Redmi-Note-13-Pro.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13 Pro 5G', 'price' => 'Php 16,999', 'rating' => '★★★★☆', 'image' => 'images/products/Redmi-Note-13-Pro-5G.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13 Pro Plus 5G', 'price' => 'Php 23,999', 'rating' => '★★★★☆',  'image' => 'images/products/Redmi-Note-13-Pro-Plus-5G.png', 'brand' => 'Xiaomi'],
            [ 'name' => 'Realme 12 5G', 'price' => 'Php 14,999', 'rating' => '★★★★☆','image' => 'images/products/realme-12-5G.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme 12 Plus 5G', 'price' => 'Php 17,999', 'rating' => '★★★★☆','image' => 'images/products/realme-12-plus-5g.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme 12 Pro Plus 5G', 'price' => 'Php 25,999', 'rating' => '★★★★☆','image' => 'images/products/12ProRealme.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme C30s', 'price' => 'Php 5,999', 'rating' => '★★★★☆','image' => 'images/products/realme-C30s.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme C53', 'price' => 'Php 7,999', 'rating' => '★★★★☆','image' => 'images/products/realme-C53.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme C55', 'price' => 'Php 8,999', 'rating' => '★★★★☆','image' => 'images/products/realme-C55.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme C67', 'price' => 'Php 9,999', 'rating' => '★★★★☆', 'image' => 'images/products/realme-C67.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme GT Neo 3', 'price' => 'Php 29,999', 'rating' => '★★★★☆', 'image' => 'images/products/realme-GT-Neo-3.png', 'brand' => 'Realme'],
            [ 'name' => 'Realme Note 50', 'price' => 'Php 3,599', 'rating' => '★★★★☆', 'image' => 'images/products/realme-Note-50.png', 'brand' => 'Realme'],
            [ 'name' => 'Samsung Galaxy A05', 'price' => 'Php 6,190', 'rating' => '★★★★☆', 'image' => 'images/products/Samsung-Galaxy-A05.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A05s', 'price' => 'Php 7,490', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-A05s.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A15 5G', 'price' => 'Php 9,990', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-A15-5G.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A25 5G', 'price' => 'Php 14,490', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-A25-5G.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A35 5G', 'price' => 'Php 18,990', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-A35-5G.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A55 5G', 'price' => 'Php 24,990', 'rating' => '★★★★☆', 'image' => 'images/products/Samsung-Galaxy-A55-5G.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S23 FE', 'price' => 'Php 25,791', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-S23-FE.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S24 Plus', 'price' => 'Php 68,990', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-S24-Plus.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S24 Ultra', 'price' => 'Php 79,990', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-S24-Ultra.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S24', 'price' => 'Php 53,990', 'rating' => '★★★★☆','image' => 'images/products/Samsung-Galaxy-S24.png', 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy Z Flip5', 'price' => 'Php 54,990', 'rating' => '★★★★☆', 'image' => 'images/products/Samsung-Galaxy-Z-Flip5.png', 'brand' => 'Samsung'],
            [ 'name' => 'Oppo A18', 'price' => 'Php 5,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-A18.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A38', 'price' => 'Php 7,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-A38.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A58', 'price' => 'Php 9,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-A58.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A60', 'price' => 'Php 9,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-A60.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A98 5G', 'price' => 'Php 18,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-A98-5G.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Find N3 Flip', 'price' => 'Php 64,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-Find-N3-Flip.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Reno11 F 5G', 'price' => 'Php 18,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-Reno11-F-5G.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Reno11 5G', 'price' => 'Php 24,999', 'rating' => '★★★★☆','image' => 'images/products/OPPO-Reno11-5G.png', 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Reno11 Pro 5G', 'price' => 'Php 31,999', 'rating' => '★★★★☆', 'image' => 'images/products/OPPO-Reno11-Pro-5G.png', 'brand' => 'Oppo'],
            [ 'name' => 'Huawei Mate X3', 'price' => 'Php 109,999', 'rating' => '★★★★★','image' => 'images/products/HUAWEI-Mate-X3.png','brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 11 Pro', 'price' => 'Php 33,999', 'rating' => '★★★★☆','image' => 'images/products/HUAWEI-nova-11-Pro.png','brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 11', 'price' => 'Php 24,999', 'rating' => '★★★★☆','image' => 'images/products/HUAWEI-nova-11.png','brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 11i', 'price' => 'Php 11,999', 'rating' => '★★★★☆','image' => 'images/products/HUAWEI-nova-11i.png','brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 12 SE', 'price' => 'Php 15,999', 'rating' => '★★★★☆','image' => 'images/products/Huawei-nova-12-SE.png','brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 12i', 'price' => 'Php 12,999', 'rating' => '★★★★☆','image' => 'images/products/Huawei-nova-12i.png','brand' => 'Huawei'],
            [ 'name' => 'Huawei P60 Pro', 'price' => 'Php 58,999', 'rating' => '★★★★☆','image' => 'images/products/HUAWEI-P60-Pro.png','brand' => 'Huawei'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
