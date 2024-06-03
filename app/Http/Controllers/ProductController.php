<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    private $keyphone = [];

    public function __construct()
    {
        $this->keyphone = [
            [ 'name' => 'Apple iPhone 11', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-11.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 12', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-12.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 13', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-13.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 14 Plus', 'price' => 'Php 1799', 'rating' => '★★★★★','image' => asset('images/products/iPhone-14-Plus.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 14', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-14.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15 Plus', 'price' => 'Php 1799', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Plus.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15 Pro Max', 'price' => 'Php 1799', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro-Max.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15 Pro', 'price' => 'Php 1799', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone 15', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-15.png'),'brand' => 'Apple'],
            [ 'name' => 'Apple iPhone SE 3rd Gen 2022', 'price' => 'Php 1799', 'rating' => '★★★☆☆','image' => asset('images/products/iPhone-SE-3rd-gen-2022.png'),'brand' => 'Apple'],
            [ 'name' => 'Vivo Y100', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-Y100.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo Y27s', 'price' => 'Php 1799', 'rating' => '★★★★★','image' => asset('images/products/vivo-Y27s.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo Y17s', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-Y17s.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo Y03', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-Y03.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V30e 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-V30e-5G.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V30 Pro 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-V30-Pro-5G.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V30 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-V30-5G.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V29e 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-V29e-5G.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Vivo V29 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/vivo-V29-5G.png'), 'brand' => 'Vivo'],
            [ 'name' => 'Xiaomi Poco F6', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/POCO-F6.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi A3', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Redmi-A3.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Redmi-Note-13.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi 13T', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/Xiaomi-13T.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi 14', 'price' => 'Php 1799', 'rating' => '★★★★☆',  'image' => asset('images/products/Xiaomi-14.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13 Pro', 'price' => 'Php 1799', 'rating' => '★★★★☆',  'image' => asset('images/products/Redmi-Note-13-Pro.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13 Pro 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/Redmi-Note-13-Pro-5G.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Xiaomi Redmi Note 13 Pro Plus 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆',  'image' => asset('images/products/Redmi-Note-13-Pro-Plus-5G.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Realme 12 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/realme-12-5G.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme 12 Plus 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/realme-12-plus-5g.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme 12 Pro Plus 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/12ProRealme.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme C30s', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/realme-C30s.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme C53', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/realme-C53.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme C55', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/realme-C55.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme C67', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/realme-C67.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme GT Neo 3', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/realme-GT-Neo-3.png'), 'brand' => 'Realme'],
            [ 'name' => 'Realme Note 50', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/realme-Note-50.png'), 'brand' => 'Realme'],
            [ 'name' => 'Samsung Galaxy A05', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/Samsung-Galaxy-A05.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A05s', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-A05s.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A15 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-A15-5G.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A25 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-A25-5G.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A35 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-A35-5G.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy A55 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/Samsung-Galaxy-A55-5G.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S23 FE', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-S23-FE.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S24 Plus', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-S24-Plus.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S24 Ultra', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-S24-Ultra.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy S24', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Samsung-Galaxy-S24.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Samsung Galaxy Z Flip5', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/Samsung-Galaxy-Z-Flip5.png'), 'brand' => 'Samsung'],
            [ 'name' => 'Oppo A18', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-A18.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A38', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-A38.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A58', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-A58.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A60', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-A60.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo A98 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-A98-5G.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Find N3 Flip', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-Find-N3-Flip.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Reno11 F 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-Reno11-F-5G.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Reno11 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/OPPO-Reno11-5G.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Oppo Reno11 Pro 5G', 'price' => 'Php 1799', 'rating' => '★★★★☆', 'image' => asset('images/products/OPPO-Reno11-Pro-5G.png'), 'brand' => 'Oppo'],
            [ 'name' => 'Huawei Mate X3', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/HUAWEI-Mate-X3.png'),'brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 11 Pro', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/HUAWEI-nova-11-Pro.png'),'brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 11', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/HUAWEI-nova-11.png'),'brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 11i', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/HUAWEI-nova-11i.png'),'brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 12 SE', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Huawei-nova-12-SE.png'),'brand' => 'Huawei'],
            [ 'name' => 'Huawei Nova 12i', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/Huawei-nova-12i.png'),'brand' => 'Huawei'],
            [ 'name' => 'Huawei P60 Pro', 'price' => 'Php 1799', 'rating' => '★★★★☆','image' => asset('images/products/HUAWEI-P60-Pro.png'),'brand' => 'Huawei'],
        ];
    }

    public function storepage()
    {
        return view('storepage', [
            'keyphone'=>$this->keyphone,
            'allkeyphone'=>$this->keyphone
        ]);
    }

    public function homepage()
    {
        $products = [
            [ 'name' => 'Apple iPhone 15 Pro Max', 'description' => 'The Apple iPhone 15 Pro Max features a sleek titanium frame and a 6.7-inch Super Retina XDR display with ProMotion technology. Powered by the A17 Bionic chip, it delivers exceptional performance and efficiency. The upgraded 48MP camera system excels in low-light conditions and offers enhanced optical zoom. With iOS 17, 5G connectivity, and a longer-lasting battery, the iPhone 15 Pro Max is a top-tier choice for users seeking a powerful and stylish smartphone.', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro-Max.png'),'brand' => 'Apple'],
            [ 'name' => 'Xiaomi 14', 'description' => 'The Xiaomi 14 is a powerhouse smartphone featuring a sleek design and a vibrant 6.5-inch AMOLED display with a high refresh rate for smooth visuals. Equipped with the latest Snapdragon 8 Gen 3 processor, it ensures top-tier performance and efficiency. The camera system includes a 50MP main sensor, ultra-wide, and telephoto lenses, delivering exceptional photography capabilities. Running on MIUI 14 based on Android, it offers a seamless and customizable user experience. With 5G support, fast charging, and a robust battery life, the Xiaomi 14 is designed to meet the demands of modern smartphone users.', 'rating' => '★★★★★',  'image' => asset('images/products/Xiaomi-14.png'), 'brand' => 'Xiaomi'],
            [ 'name' => 'Realme 12 Pro Plus 5G', 'description' => 'The Realme 12 Pro Plus 5G combines cutting-edge technology with a sleek design, featuring a stunning 6.7-inch Super AMOLED display with a high refresh rate for immersive visuals. Powered by the latest Dimensity 9000 chipset, it ensures fast and efficient performance. Its impressive camera system includes a 108MP main sensor, ultra-wide, and telephoto lenses, delivering exceptional photo and video quality. Running on Realme UI 4.0 based on Android, it provides a smooth and customizable user experience. With 5G connectivity, fast charging, and a long-lasting battery, the Realme 12 Pro Plus 5G is a top-tier choice for those seeking a high-performance smartphone.', 'rating' => '★★★★★','image' => asset('images/products/12ProRealme.png'), 'brand' => 'Realme'],
            [ 'name' => 'Apple iPhone 15 Pro', 'description' => 'The Apple iPhone 15 Pro features a sophisticated design with a durable titanium frame and a 6.1-inch Super Retina XDR display, enhanced by ProMotion technology for fluid visuals. Powered by the A17 Bionic chip, it offers exceptional speed and efficiency. The advanced camera system, including a 48MP main sensor, excels in various lighting conditions and supports enhanced optical zoom and computational photography. Running on iOS 17, it delivers a seamless user experience with new software features and robust privacy protections. With 5G connectivity and improved battery life, the iPhone 15 Pro stands out as a powerful and stylish choice for discerning users.', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro.png'),'brand' => 'Apple'],
        ];
        return view('homepage', [
            'products'=> $products,
            'allkeyphone'=>$this->keyphone
        ]);
    }

    public function storesearch($id)
    {
        $searcharray = [];

        foreach($this->keyphone as $key){
            if($key['brand'] === $id){
                $searcharray[] = $key;
            }
            if($id === 'all'){
                $searcharray[] = $key;
            }
        }

        return view('storepage', [
            'keyphone'=>$searcharray,
            'allkeyphone'=>$this->keyphone
        ]);
    }

    public function showProduct($productId)
    {
        $searchArray = '';
        $path = storage_path("specifications/{$productId}.json");
        
        if (!File::exists($path)) {
            abort(404, "Specifications not found");
        }

        $specifications = json_decode(File::get($path), true);

        $formattedSpecifications = formatSpecifications($specifications);

        foreach ($this->keyphone as $key) {
            $keyName = strtolower(str_replace(' ', '', $key['name']));

            if ($keyName === $productId) {
                $searchArray = $key;
            }
        }

        return view('product', [
            'formattedSpecifications' => $formattedSpecifications,
            'keyphone' => $searchArray,
            'allkeyphone'=> $this->keyphone
        ]);
    }
}
