<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyPhone</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 overflow-x-hidden">
    <nav class="bg-custom-darkBlue py-4 fixed top-0 w-full z-50">
        <div class="w-full container mx-10 flex justify-between items-center">
            <ul class="flex space-x-6 text-white">
                <li class="text-white text-2xl font-bold">logo</li>
                <li><a href="#" class="text-white text-2xl font-bold">KeyPhone</a></li>
            </ul>
            <ul class="flex space-x-6 text-white w-16">
                <li><a href="homepage" class="hover:border-b hover:border-custom-gold">Home</a></li>
                <li><a href="storepage" class="hover:border-b hover:border-custom-gold">Store</a></li>
                <li><a href="#" class="hover:border-b hover:border-custom-gold" id="supportDropdown">Support</a></li>
                <li><a href="#" class="flex items-center" id="svgLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="ml-4" id="searchIcon">
                        <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </a>
                </li>
                <li><a href="checkout" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </a>
                </li>
                <li><a href="login" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 20 20" version="1.1" class="text-white fill-current">
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
        <div id="searchContainer" class="relative w-full left-0 bg-custom-darkBlue pt-4 pb-2 px-8 hidden">
        <div class="relative">
            <div class="flex items-center">
                <input type="text" id="searchBar" placeholder="Search KeyPhone" class="w-full p-2 rounded mr-2">
                <a href="#" class="block">
                    <button id="searchButton" class="bg-custom-blueGray text-white px-4 py-2 rounded hover:bg-blue-500">Search</button>
                </a>
            </div>
            <div id="brandDropdown" class="absolute left-0 w-full bg-white border border-gray-300 rounded mt-2 hidden">
                <ul>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Apple</li>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Huawei</li>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Oppo</li>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Realme</li>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Samsung</li>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Vivo</li>
                    <li class="brandItem px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer">Xiaomi</li>
                </ul>
            </div>
        </div>
    </div>
        <div id="supportDropdownContent" class="absolute w-full left-0 bg-custom-darkBlue py-4 px-8 hidden flex justify-center">
            <a href="delivery-and-shipping" class="text-white text-lg px-1 mx-12 py-1 hover:border-b hover:border-custom-gold font-semibold">Delivery and Shipping</a>
            <a href="payment" class="text-white text-lg px-1 mx-12 py-1 hover:border-b hover:border-custom-gold font-semibold">Payment</a>
            <a href="#" class="text-white text-lg px-1 mx-12 py-1 hover:border-b hover:border-custom-gold font-semibold">About Us</a>
        </div>
    </nav>
    <section class="relative bg-cover bg-center" style="background-image: url('images/phones-bg.jpeg');">
        <div class="bg-custom-darkBlue bg-opacity-75 text-white py-52 flex flex-wrap items-center justify-center p-12 relative z-20">
            <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
                <div class="text-center m-8">
                    <h1 class="text-5xl font-bold mb-7">Welcome to KeyPhone</h1>
                    <p class="text-xl">Welcome to KeyPhone, your premier destination for the latest and greatest in mobile technology. Discover our extensive selection of cutting-edge smartphones, designed to keep you connected and ahead of the curve. At KeyPhone, we combine quality with affordability, ensuring you get the best value for your money. Join our community of tech enthusiasts today and experience the future of mobile communication. Shop now and unlock the power of innovation with KeyPhone!</p>
                    <a href="storepage" class="mt-6 inline-block bg-custom-blueGray hover:bg-blue-500 text-white font-bold py-3 px-8 rounded">Shop Now</a>
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
                <a href="storepage" class="mt-6 inline-block bg-custom-blueGray hover:bg-blue-500 text-white font-bold py-3 px-8 rounded">Shop Now</a>
            </div>
        </div>
    </div>
    </section>
    <section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Best KeyPhone</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php 
            $products = [
                [ 'name' => 'Apple iPhone 15 Pro Max', 'description' => 'The Apple iPhone 15 Pro Max features a sleek titanium frame and a 6.7-inch Super Retina XDR display with ProMotion technology. Powered by the A17 Bionic chip, it delivers exceptional performance and efficiency. The upgraded 48MP camera system excels in low-light conditions and offers enhanced optical zoom. With iOS 17, 5G connectivity, and a longer-lasting battery, the iPhone 15 Pro Max is a top-tier choice for users seeking a powerful and stylish smartphone.', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro-Max.png'),'brand' => 'Apple'],
                [ 'name' => 'Xiaomi 14', 'description' => 'The Xiaomi 14 is a powerhouse smartphone featuring a sleek design and a vibrant 6.5-inch AMOLED display with a high refresh rate for smooth visuals. Equipped with the latest Snapdragon 8 Gen 3 processor, it ensures top-tier performance and efficiency. The camera system includes a 50MP main sensor, ultra-wide, and telephoto lenses, delivering exceptional photography capabilities. Running on MIUI 14 based on Android, it offers a seamless and customizable user experience. With 5G support, fast charging, and a robust battery life, the Xiaomi 14 is designed to meet the demands of modern smartphone users.', 'rating' => '★★★★★',  'image' => asset('images/products/Xiaomi-14.png'), 'brand' => 'Xiaomi'],
                [ 'name' => 'Realme 12 Pro Plus 5G', 'description' => 'The Realme 12 Pro Plus 5G combines cutting-edge technology with a sleek design, featuring a stunning 6.7-inch Super AMOLED display with a high refresh rate for immersive visuals. Powered by the latest Dimensity 9000 chipset, it ensures fast and efficient performance. Its impressive camera system includes a 108MP main sensor, ultra-wide, and telephoto lenses, delivering exceptional photo and video quality. Running on Realme UI 4.0 based on Android, it provides a smooth and customizable user experience. With 5G connectivity, fast charging, and a long-lasting battery, the Realme 12 Pro Plus 5G is a top-tier choice for those seeking a high-performance smartphone.', 'rating' => '★★★★★','image' => asset('images/products/12ProRealme.png'), 'brand' => 'Realme'],
                [ 'name' => 'Apple iPhone 15 Pro', 'description' => 'The Apple iPhone 15 Pro features a sophisticated design with a durable titanium frame and a 6.1-inch Super Retina XDR display, enhanced by ProMotion technology for fluid visuals. Powered by the A17 Bionic chip, it offers exceptional speed and efficiency. The advanced camera system, including a 48MP main sensor, excels in various lighting conditions and supports enhanced optical zoom and computational photography. Running on iOS 17, it delivers a seamless user experience with new software features and robust privacy protections. With 5G connectivity and improved battery life, the iPhone 15 Pro stands out as a powerful and stylish choice for discerning users.', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro.png'),'brand' => 'Apple'],
            ];
            foreach($products as $product): 
            ?>
            <div class="bg-white p-6 rounded-lg shadow-md product flex flex-col">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-64 object-cover mb-4 rounded">
                <h3 class="text-xl font-bold mb-2"><?php echo $product['name']; ?></h3>
                <p class="text-yellow-400 font-semibold mb-2"><?php echo $product['rating']; ?></p>
                <p class="text-gray-700 text-justify"><?php echo $product['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </section>
    <footer class="bg-gray-900 text-white pt-6">
    <div class="container mx-auto md:flex md:justify-between">
        <div class="md:w-1/2 md:mb-0 mb-4 -ml-10">
            <h2 class="text-xl font-bold">Contact Us</h2>
            <p class="mt-2">Pasig City, Metro Manila, Philippines</p>
            <p>Phone: +639374681175</p>
            <p>Email: keyphone@gmail.com</p>
        </div>
        <div class="md:w-1/2 flex md:justify-end md:pr-0">
            <div class="ml-auto -mr-10">
                <h2 class="text-xl font-bold">Follow Us</h2>
                <div class="flex mt-2">
                    <a href="http://facebook.com" class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="32" height="32" viewBox="0 0 32 32" version="1.1">
                            <path d="M30.996 16.091c-0.001-8.281-6.714-14.994-14.996-14.994s-14.996 6.714-14.996 14.996c0 7.455 5.44 13.639 12.566 14.8l0.086 0.012v-10.478h-3.808v-4.336h3.808v-3.302c-0.019-0.167-0.029-0.361-0.029-0.557 0-2.923 2.37-5.293 5.293-5.293 0.141 0 0.281 0.006 0.42 0.016l-0.018-0.001c1.199 0.017 2.359 0.123 3.491 0.312l-0.134-0.019v3.69h-1.892c-0.086-0.012-0.185-0.019-0.285-0.019-1.197 0-2.168 0.97-2.168 2.168 0 0.068 0.003 0.135 0.009 0.202l-0.001-0.009v2.812h4.159l-0.665 4.336h-3.494v10.478c7.213-1.174 12.653-7.359 12.654-14.814v-0z"/>
                        </svg>
                    </a>
                    <a href="http://twitter.com" class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 -2 20 20" version="1.1">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#ffffff">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                            <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"></path>
                            </g>
                            </g>
                            </g>
                    </svg>
                    </a>
                    <a href="http://instagram.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#ffffff"/>
                            <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#ffffff"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#ffffff"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-custom-darkBlue py-3 mt-6 mb-0">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 KeyPhone. All rights reserved.</p>
        </div>
    </div>
    </footer>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('svgLink').addEventListener('click', function(event) {
        event.preventDefault();
        var searchContainer = document.getElementById('searchContainer');
        searchContainer.classList.toggle('hidden');
    });
    document.getElementById('supportDropdown').addEventListener('click', function(event) {
        event.preventDefault();
        var supportDropdown = document.getElementById('supportDropdownContent');
        supportDropdown.classList.toggle('hidden');
    });
    const searchBar = document.getElementById('searchBar');
    const brandDropdown = document.getElementById('brandDropdown');

    searchBar.addEventListener('focus', () => {
        brandDropdown.classList.remove('hidden');
    });
    document.addEventListener('click', (event) => {
        if (!searchBar.contains(event.target) && !brandDropdown.contains(event.target)) {
            brandDropdown.classList.add('hidden');
        }
    });
});
</script>
</body>
</html>