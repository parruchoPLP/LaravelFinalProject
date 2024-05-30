<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyPhone</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 py-4">
        <div class="w-full container mx-8 flex justify-between items-center">
            <ul class="flex space-x-6 text-white">
                <li><a href="#" class="text-white text-2xl font-bold">logo</a></li>
                <li><a href="#" class="text-white text-2xl font-bold">KeyPhone</a></li>
            </ul>
            <ul class="flex space-x-6 text-white">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Store</a></li>
                <li><a href="#" class="hover:text-gray-300">Support</a></li>
                <li>
                <a href="#" class="hover:text-gray-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="ml-4">
                        <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </li>
            
            <li>
                <a href="#" class="hover:text-gray-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>
</li>
<li>
            <a href="#" class="hover:text-gray-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 20 20" version="1.1" class="text-white fill-current">
            <title>profile [#1336]</title>
            <desc>Created with Sketch.</desc>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -2159.000000)" fill="#ffffff">
                    <g id="icons" transform="translate(56.000000, 160.000000)">
                        <path d="M334,2011 C337.785,2011 340.958,2013.214 341.784,2017 L326.216,2017 C327.042,2013.214 330.215,2011 334,2011 M330,2005 C330,2002.794 331.794,2001 334,2001 C336.206,2001 338,2002.794 338,2005 C338,2007.206 336.206,2009 334,2009 C331.794,2009 330,2007.206 330,2005 M337.758,2009.673 C339.124,2008.574 340,2006.89 340,2005 C340,2001.686 337.314,1999 334,1999 C330.686,1999 328,2001.686 328,2005 C328,2006.89 328.876,2008.574 330.242,2009.673 C326.583,2011.048 324,2014.445 324,2019 L344,2019 C344,2014.445 341.417,2011.048 337.758,2009.673" id="profile-[#1336]"></path>
                    </g>
                </g>
            </g>
        </svg>
</a>
</li>
            </ul>
        </div>
    </nav>
    <section class="relative">
        <div class="absolute inset-0 bg-cover bg-center z-0 bg-[url('/images/phones-bg.jpeg')]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-blue-700 to-transparent z-10"></div>
        <div class="bg-gray-900 bg-opacity-75 text-white py-52 flex flex-wrap items-center justify-center p-12 relative z-20">
            <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
                <div class="text-left">
                    <h1 class="text-5xl font-bold mb-4">Welcome to Key Phone</h1>
                    <p class="text-lg">Welcome to KeyPhone, your premier destination for the latest and greatest in mobile technology. Discover our extensive selection of cutting-edge smartphones, designed to keep you connected and ahead of the curve. At KeyPhone, we combine quality with affordability, ensuring you get the best value for your money. Join our community of tech enthusiasts today and experience the future of mobile communication. Shop now and unlock the power of innovation with KeyPhone!</p>
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
                <img src="{{ asset('images/apple.png') }}" alt="Apple" style="width: 180px; height: 180px;">
                <img src="{{ asset('images/realme.png') }}" alt="Realme" style="width: 320px; height: 180px;">
                <img src="{{ asset('images/xiaomi.png') }}" alt="Xiaomi" style="width: 180px; height: 180px;">
                <img src="{{ asset('images/oppo.png') }}" alt="Oppo" style="width: 200px; height: 180px;">
                <img src="{{ asset('images/tecno.png') }}" alt="Tecno Mobile" style="width: 240px; height: 180px;">
                <img src="{{ asset('images/huawei.png') }}" alt="Huawei" style="width: 180px; height: 180px;">
                <img src="{{ asset('images/vivo.png') }}" alt="Vivo" style="width: 200px; height: 180px;">
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
            <p>&copy; <?php echo date('Y'); ?> KeyPhone. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
