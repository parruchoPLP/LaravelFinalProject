<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function storepage(Request $request)
    {
        $allkeyphone = Product::all();
        $perPage = 9; // Number of items per page
        $page = $request->input('page', 1); // Get current page from request, default is 1

        $products = Product::paginate($perPage, ['*'], 'page', $page);

        return view('storepage', [
            'keyphone' => $products,
            'allkeyphone' => $allkeyphone,
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
        $keyphoneproducts = Product::all();
        return view('homepage', [
            'products'=> $products,
            'allkeyphone'=>$keyphoneproducts,
        ]);
    }

    public function aboutus()
    {
        $products = Product::all(); // Fetch all products if needed

        return view('aboutus', [
            'allkeyphone' => $products,
        ]);
    }

    public function checkout()
    {
        $products = Product::all(); // Fetch all products if needed
        $user = Auth::user();
        $cartItems = CartItem::with('product')->where('user_id', Auth::id())->get();
    
        // Calculate total price
        $totalPrice = $cartItems->sum(function ($item) {
            $price = intval(str_replace(['Php', ','], '', $item->product->price));
            return $item->quantity * $price;
        });

        return view('checkout', [
            'user' => $user,
            'allkeyphone' => $products,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function profile()
    {
        $products = Product::all(); // Fetch all products if needed

        return view('profile', [
            'allkeyphone' => $products,
        ]);
    }

    public function deliveryandshipping()
    {
        $products = Product::all(); // Fetch all products if needed

        return view('delivery-and-shipping', [
            'allkeyphone' => $products,
        ]);
    }

    public function login()
    {
        $products = Product::all(); // Fetch all products if needed

        return view('loginandsignup', [
            'allkeyphone' => $products,
        ]);
    }

    public function signup()
    {
        $products = Product::all(); // Fetch all products if needed

        return view('loginandsignup', [
            'allkeyphone' => $products,
        ]);
    }

    public function storesearch(Request $request, $id)
    {
        $allkeyphone = Product::all();
        if ($id === 'all') {
            $products = Product::paginate(9);
        } else {
            $products = Product::where('brand', $id)->paginate(9);
        }

        return view('storepage', [
            'keyphone' => $products,
            'allkeyphone' => $allkeyphone,
        ]);
    }

    public function showProduct($productId)
    {
        $product = [];
        $products = Product::all();
        $path = storage_path("specifications/{$productId}.json");

        if (!File::exists($path)) {
            abort(404, "Specifications not found");
        }

        $specifications = json_decode(File::get($path), true);

        foreach ($products as $key) {
            $keyName = strtolower(str_replace(' ', '', $key['name']));

            if ($keyName === $productId) {
                $product = $key;
            }
        }

        $formattedSpecifications = formatSpecifications($specifications);

        return view('product', [
            'formattedSpecifications' => $formattedSpecifications,
            'keyphone' => $product,
            'allkeyphone' => $products,
        ]);
    }
}
