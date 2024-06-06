@extends('layouts.app')

@section('title','Keyphone Store')

@section('pageTitle','KeyPhone Products')

@section('content')
<section class="py-6 flex ">
    <aside class="w-1/4 p-6 bg-white h-full rounded">
        <h2 class="text-2xl font-bold mb-4 text-custom-darkBlue">KeyPhone Brands</h2>
        <ul class="space-y-4" id="brandList">
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="all">All KeyPhone</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Apple">Apple</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Huawei">Huawei</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Oppo">Oppo</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Realme">Realme</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Samsung">Samsung</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Vivo">Vivo</a></li>
            <li><a href="#" class="block font-semibold text-custom-darkBlue hover:border-b hover:border-custom-gold p-2 rounded" phone-brand="Xiaomi">Xiaomi</a></li>
        </ul>
        <div class="w-full mt-6">
            <h2 class="text-2xl font-bold mb-4 text-custom-darkBlue">Latest KeyPhones</h2>
        <div class="flex mb-8">
            <img src="{{ asset('images/products/Xiaomi-14.png') }}" alt="14" class="w-64 h-auto">
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold mb-2 text-custom-darkBlue hover:border-b hover:border-custom-gold">Xiaomi 14</h3>
                <p class="text-yellow-400 mb-2">★★★★★</p>
                <p class="text-lg font-bold mb-2">Php 1231233r4</p>
            </div>
        </div>
        <div class="flex mb-8">
            <img src="{{ asset('images/products/vivo-Y03.png') }}" alt="Y03" class="w-64 h-auto">
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold mb-2 hover:border-b hover:border-custom-gold">Vivo Y03</h3>
                <p class="text-yellow-400 mb-2">★★★★☆</p>
                <p class="text-lg font-bold mb-2">$999</p>
            </div>
        </div>
        <div class="flex mb-8">
            <img src="{{ asset('images/products/SAMSUNG-Galaxy-Z-Flip5.png') }}" alt="Flip5" class="w-64 h-auto">
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold mb-2 hover:border-b hover:border-custom-gold">Samsung Galaxy Z Flip 5</h3>
                <p class="text-yellow-400 mb-2">★★★★★</p>
                <p class="text-lg font-bold mb-2">$999</p>
            </div>
        </div>
        <div class="flex mb-8">
            <img src="{{ asset('images/products/iPhone-15-Pro-Max.png') }}" alt="15" class="w-64 h-auto">
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold mb-2 hover:border-b hover:border-custom-gold">iPhone 15 Pro Max</h3>
                <p class="text-yellow-400 mb-2">★★★★★</p>
                <p class="text-lg font-bold mb-2">$999</p>
            </div>
        </div>
        <div class="flex">
            <img src="{{ asset('images/products/OPPO-Reno11-Pro-5G.png') }}" alt="15" class="w-64 h-auto">
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold mb-2 hover:border-b hover:border-custom-gold">Oppo Reno 11 Pro 5G</h3>
                <p class="text-yellow-400 mb-2">★★★★★</p>
                <p class="text-lg font-bold mb-2">$999</p>
            </div>
        </div>
        </div>
    </aside>
    <div class="w-3/4 container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="productGrid">
            @foreach($keyphone as $product)
                <div id="{{ Str::slug($product['name'], '-') }}" class="bg-white p-6 rounded-lg shadow-md product relative flex flex-col" phone-brand="{{ $product['brand'] }}">
                    <a href="{{ url('/product/' . Str::slug(str_replace(' ', '', strtolower($product['name'])), '-')) }}">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full mb-4">
                    </a>
                    <h3 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h3>
                    <p class="text-yellow-400 font-semibold text-lg">{{ $product['rating'] }}</p>
                    <p class="text-lg font-bold mb-4 pt-1 py-10">{{ $product['price'] }}</p>
                    <div class="flex-grow"></div>
                    <a id="add-to-cart-button" data-product-id="{{ $product->id }}" href="{{ Auth::check() ? '#' : '/login' }}" class="block bg-custom-darkBlue text-white text-center py-2 rounded-lg hover:bg-custom-blueGray absolute bottom-0 left-0 right-0 mb-6 mx-6">Add to Cart</a>
                    @auth
                    <form action="{{ route('cart.addToCart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="block bg-custom-darkBlue text-white text-center py-2 rounded-lg hover:bg-custom-blueGray absolute bottom-0 left-0 right-0 mb-6 mx-6">Add to Cart</button>
                    </form>
                    @endauth
                </div>
            @endforeach
        </div>
    
        <!-- Render pagination links -->
        <div class="mt-6 flex justify-end">
            {{ $keyphone->links() }}
        </div>
    </div>
    </div>
    </section>
    @if (session('removesuccess'))
        <x-successAlert successTitle="Item Removed!" :successInfo="session('removesuccess')"/>
    @endif
    @if (session('addtocartsuccess'))
        <x-successAlert successTitle="Item Added!" :successInfo="session('addtocartsuccess')"/>
    @endif
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var brandList = document.getElementById('brandList');
            var productGrid = document.getElementById('productGrid');

            brandList.addEventListener('click', function(e) {
                if (e.target.tagName === 'A') {
                    e.preventDefault();
                    var selectedBrand = e.target.getAttribute('phone-brand');
                    window.location.href = `/storepage/${selectedBrand}`;
                }
            });
        });
    </script>
@endpush