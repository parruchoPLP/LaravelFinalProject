@extends('layouts.app')

@section('title','KeyPhone')

@section('content')
    @if (session('removesuccess'))
    <x-successAlert successTitle="Item Removed!" :successInfo="session('removesuccess')"/>
    @endif
    @if (session('loginsuccess'))
    <x-successAlert successTitle="Success!" :successInfo="session('loginsuccess')"/>
    @endif
    @if (session('checkoutsuccess'))
    <x-successAlert successTitle="Success!" :successInfo="session('checkoutsuccess')"/>
    @endif
    <section class="relative bg-cover bg-center" style="background-image: url('images/phones-bg.jpeg');">
        <div class="bg-custom-darkBlue bg-opacity-75 text-white py-52 flex flex-wrap items-center justify-center p-12 relative z-20">
            <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
                <div class="text-center m-8">
                    <h1 class="text-5xl font-bold mb-7">Welcome to KeyPhone</h1>
                    <p class="text-xl">Welcome to KeyPhone, your premier destination for the latest and greatest in mobile technology. Discover our extensive selection of cutting-edge smartphones, designed to keep you connected and ahead of the curve. At KeyPhone, we combine quality with affordability, ensuring you get the best value for your money. Join our community of tech enthusiasts today and experience the future of mobile communication. Shop now and unlock the power of innovation with KeyPhone!</p>
                    <a href="/storepage" class="mt-6 inline-block bg-custom-blueGray hover:bg-blue-500 text-white font-bold py-3 px-8 rounded">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-4">
        <div class="container mx-auto">
            <div class="flex justify-center items-center space-x-8">
                <img src="{{ asset('images/apple.png') }}" alt="Apple" style="width: 180px; height: 150px;">
                <img src="{{ asset('images/realme.png') }}" alt="Realme" style="width: 320px; height: 150px;">
                <img src="{{ asset('images/xiaomi.png') }}" alt="Xiaomi" style="width: 200px; height: 150px;">
                <img src="{{ asset('images/oppo.png') }}" alt="Oppo" style="width: 200px; height: 150px;">
                <img src="{{ asset('images/samsunglogo.png') }}" alt="Samsung" style="width: 240px; height: 150px;">
                <img src="{{ asset('images/huawei.png') }}" alt="Huawei" style="width: 180px; height: 150px;">
                <img src="{{ asset('images/vivo.png') }}" alt="Vivo" style="width: 200px; height: 150px;">
            </div>
        </div>
    </section>
    <section class="relative">
    <div class="bg-gray-900  text-white py-52 flex flex-wrap items-center justify-center p-12 relative z-20">
        <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-7">KeyPhone: Your Future in Your Pocket.</h1>
                <div class="flex justify-center mb-10">
                    <div class="w-1/4 lg:w-1/6 h-auto mx-4 rounded-lg overflow-hidden relative">
                        <img src="{{ asset('images/iphones.jpg') }}" alt="Apple" class="h-full w-full object-cover">
                        <img src="{{ asset('images/applelogo.png') }}" alt="Apple Hover" class="h-full w-full object-cover absolute inset-0 opacity-0 hover:opacity-100 transition duration-300 ease-in-out">
                    </div>
                    <div class="w-1/4 lg:w-1/6 h-auto mx-4 rounded-lg overflow-hidden relative">
                        <img src="{{ asset('images/xiaomiphones.jpg') }}" alt="Xiaomi" class="h-full w-full object-cover">
                        <img src="{{ asset('images/xiaomilogo.png') }}" alt="Xiaomi Hover" class="h-full w-full object-cover absolute inset-0 opacity-0 hover:opacity-100 transition duration-300 ease-in-out">
                    </div>
                    <div class="w-1/4 lg:w-1/6 h-auto mx-4 rounded-lg overflow-hidden relative">
                        <img src="{{ asset('images/huaweiphones.png') }}" alt="Huawei" class="h-full w-full object-cover">
                        <img src="{{ asset('images/huaweilogo.jpg') }}" alt="Huawei Hover" class="h-full w-full object-cover absolute inset-0 opacity-0 hover:opacity-100 transition duration-300 ease-in-out">
                    </div>
                    <div class="w-1/4 lg:w-1/6 h-auto mx-4 rounded-lg overflow-hidden relative">
                        <img src="{{ asset('images/realmephones.jpg') }}" alt="Realme" class="h-full w-full object-cover">
                        <img src="{{ asset('images/realmelogo.png') }}" alt="Realme Hover" class="h-full w-full object-cover absolute inset-0 opacity-0 hover:opacity-100 transition duration-300 ease-in-out">
                    </div>
                </div>
                <p class="text-xl">Looking to elevate your mobile experience? Look no further! At KeyPhone, we've got what you're looking for. Dive into our range of sleek and stylish smartphones, each packed with features tailored to suit every lifestyle. Whether you crave seamless connectivity or crave stunning camera capabilities, KeyPhone delivers it all. Don't settle for less when you can have the best. Shop now and make every call, text, and selfie count with KeyPhone - Your Future in Your Pocket.</p>
                <a href="/storepage" class="mt-6 inline-block bg-custom-blueGray hover:bg-blue-500 text-white font-bold py-3 px-8 rounded">Shop Now</a>
            </div>
        </div>
    </div>
    </section>
    <section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center text-custom-darkBlue">Our Top Picks</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php 
            foreach($products as $product): 
            ?>
            <div class="bg-white p-6 rounded-lg shadow-md product flex flex-col">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-64 object-cover mb-4 rounded">
                <h3 class="text-xl font-bold mb-2 text-custom-darkBlue"><?php echo $product['name']; ?></h3>
                <p class="text-yellow-400 font-semibold mb-2"><?php echo $product['rating']; ?></p>
                <p class="text-gray-700 text-justify"><?php echo $product['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </section>
@endsection

@push('scripts')
   
@endpush