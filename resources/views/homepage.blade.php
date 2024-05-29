<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyPhone</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('/phones-bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">KeyPhone</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Store</a></li>
                <li><a href="#" class="hover:text-gray-300">Support</a></li>
                <li><a href="#" class="hover:text-gray-300">About Us</a></li>
            </ul>
        </div>
    </nav>
    <section class="relative">
        <!-- Background image -->
        <div class="absolute inset-0 bg-cover bg-center z-0 background-image"></div>
    
        <!-- Semi-transparent blue overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-blue-700 to-transparent z-10"></div>

        <!-- Content -->
        <div class="bg-gray-900 bg-opacity-75 text-white py-52 flex flex-wrap items-center justify-center p-12 relative z-20">
            <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
                <div class="text-left">
                    <h1 class="text-5xl font-bold mb-4">Welcome to Key Phone</h1>
                    <p class="text-xl">Are you a gadget lover? Do you want to keep up with the latest technology trends? Look no further than KeyPhone! Our store offers a variety of gadgets that are sure to take consumers by storm. From smartphones to laptops, to iPads, to smartwatches, we got what you're looking for.</p>
                    <a href="#" class="mt-6 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded">Shop Now</a>
                </div>
            </div>
            <div class="md:w-1/2 lg:w-1/3 flex justify-center mt-6 md:mt-0">
                <div class="grid grid-cols-2 gap-4">
                    <img src="images/random_image_1.jpg" alt="Random Image 1" class="rounded-lg">
                    <img src="images/random_image_2.jpg" alt="Random Image 2" class="rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <div class="flex justify-center items-center space-x-8">
                <img src="{{ asset('apple.png') }}" alt="Apple" style="width: 180px; height: 180px;">
                <img src="{{ asset('realme.png') }}" alt="Realme" style="width: 320px; height: 180px;">
                <img src="{{ asset('xiaomi.png') }}" alt="Xiaomi" style="width: 180px; height: 180px;">
                <img src="{{ asset('oppo.png') }}" alt="Oppo" style="width: 200px; height: 180px;">
                <img src="{{ asset('tecno.png') }}" alt="Tecno Mobile" style="width: 240px; height: 180px;">
                <img src="{{ asset('huawei.png') }}" alt="Huawei" style="width: 180px; height: 180px;">
                <img src="{{ asset('vivo.png') }}" alt="Vivo" style="width: 200px; height: 180px;">
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Featured Phones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <?php 
                $products = [
                    [
                        'name' => 'Product 1',
                        'price' => 'Php 999',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'image' => 'https://via.placeholder.com/500',
                    ],
                    [
                        'name' => 'Product 2',
                        'price' => 'Php 1299',
                        'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                        'image' => 'https://via.placeholder.com/500',
                    ],
                    [
                        'name' => 'Product 3',
                        'price' => 'Php 1499',
                        'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                        'image' => 'https://via.placeholder.com/500',
                    ],
                    [
                        'name' => 'Product 4',
                        'price' => 'Php 1799',
                        'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'image' => 'https://via.placeholder.com/500',
                    ],
                ];
                
                foreach($products as $product): 
                ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2"><?php echo $product['name']; ?></h3>
                        <p class="text-gray-700"><?php echo $product['description']; ?></p>
                        <p class="text-gray-700"><?php echo $product['price']; ?></p>
                        <button class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date('Y'); ?> Key Phone. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
