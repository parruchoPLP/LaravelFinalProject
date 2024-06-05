@php
// Dummy cart items
$cartItems = [
    [ 'name' => 'Apple iPhone 11', 'price' => 'Php 24,990', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-11.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 12', 'price' => 'Php 30,990', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-12.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 13', 'price' => 'Php 42,990', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-13.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 14 Plus', 'price' => 'Php 56,990', 'rating' => '★★★★★','image' => asset('images/products/iPhone-14-Plus.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 14', 'price' => 'Php 49,990', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-14.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 15 Plus', 'price' => 'Php 63,990', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Plus.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 15 Pro Max', 'price' => 'Php 84,990', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro-Max.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 15 Pro', 'price' => 'Php 70,990', 'rating' => '★★★★★','image' => asset('images/products/iPhone-15-Pro.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone 15', 'price' => 'Php 56,990', 'rating' => '★★★★☆','image' => asset('images/products/iPhone-15.png'),'brand' => 'Apple'],
    [ 'name' => 'Apple iPhone SE 3rd Gen 2022', 'price' => 'Php 33,990', 'rating' => '★★★☆☆','image' => asset('images/products/iPhone-SE-3rd-gen-2022.png'),'brand' => 'Apple'],
    [ 'name' => 'Vivo Y100', 'price' => 'Php 12,499', 'rating' => '★★★★☆','image' => asset('images/products/vivo-Y100.png'), 'brand' => 'Vivo'],
    [ 'name' => 'Vivo Y27s', 'price' => 'Php 9,999', 'rating' => '★★★★★','image' => asset('images/products/vivo-Y27s.png'), 'brand' => 'Vivo'],
    [ 'name' => 'Vivo Y17s', 'price' => 'Php 6,999', 'rating' => '★★★★☆','image' => asset('images/products/vivo-Y17s.png'), 'brand' => 'Vivo'],
];
@endphp

<nav class="bg-custom-darkBlue py-2 fixed top-0 w-full z-50">
    <div class="w-full container mx-10 flex justify-between items-center">
        <ul class="flex items-center space-x-2 text-white">
            <li><a href="/homepage"><img src="{{ asset('images/keyphone.png') }}" style="width: 50px; height: 50px;"></a></li>
            <li><a href="/homepage" class="text-white text-2xl font-bold">KeyPhone</a></li>
        </ul>
        <ul class="flex space-x-6 text-white w-16">
            <li><a href="/homepage" class="hover:border-b hover:border-custom-gold">Home</a></li>
            <li><a href="/storepage" class="hover:border-b hover:border-custom-gold">Store</a></li>
            <li><a href="#" class="hover:border-b hover:border-custom-gold" id="supportDropdown">Support</a></li>
            <li><a href="#" class="flex items-center" id="svgLink">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="ml-4" id="searchIcon">
                    <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            </li>
            <li><a href="#" class="flex items-center" id="cartButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            </li>
            <li><a href="/login" class="flex items-center">
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
    <div id="searchContainer" class="relative w-1/2 mx-auto bg-custom-darkBlue pt-4 pb-2 px-4 hidden">
        <div class="relative">
            <div class="flex items-center">
                <input type="text" id="searchBar" placeholder="Search KeyPhone" class="w-full p-2 rounded mr-2">
                <a href="#" class="block">
                    <button id="searchButton" class="bg-custom-blueGray text-white px-4 py-2 rounded hover:bg-blue-500">Search</button>
                </a>
            </div>
            <div id="phoneDropdown" class="absolute left-0 w-full bg-white border border-gray-300 rounded mt-2 hidden max-h-80 h-80 overflow-y-auto">
                <ul>
                    <?php foreach ($allkeyphone as $phone): ?>
                        <li class="phoneItem flex items-center px-4 py-2 hover:border-b hover:border-custom-gold hover:bg-gray-200 cursor-pointer" phone-name="<?= $phone['name'] ?>">
                            <img src="<?= $phone['image'] ?>" alt="<?= $phone['name'] ?>" class="phone-image w-20 h-auto mr-2">
                            <span class="phone-name text-lg font-bold"><?= $phone['name'] ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div id="supportDropdownContent" class="absolute w-full left-0 bg-custom-darkBlue py-4 px-8 hidden flex justify-center">
        <a href="/delivery-and-shipping" class="text-white text-lg px-1 mx-12 py-1 hover:border-b hover:border-custom-gold font-semibold">Delivery and Shipping</a>
        <a href="/payment" class="text-white text-lg px-1 mx-12 py-1 hover:border-b hover:border-custom-gold font-semibold">Payment</a>
        <a href="/aboutus" class="text-white text-lg px-1 mx-12 py-1 hover:border-b hover:border-custom-gold font-semibold">About Us</a>
    </div>
    <div id="cartDropdown" class="absolute top-16 right-0 bg-white shadow-md rounded-md p-4 hidden w-96 max-h-80 overflow-y-auto">
        <!-- Cart items will be dynamically added here -->
        @foreach ($cartItems as $item)
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-12 h-12 mr-2 rounded">
                    <div>
                        <div class="text-sm font-semibold">{{ $item['name'] }}</div>
                        <div class="text-gray-500">Quantity: 2</div> <!-- I replaced the dynamic quantity with a static value -->
                        <div class="text-gray-500">{{ $item['price'] }}</div>
                    </div>
                </div>
                <button class="text-red-500 hover:text-red-700 focus:outline-none" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zM8 14a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1zM5 8a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endforeach
    
        <!-- Cart total -->
        <div class="flex justify-between border-t border-gray-200 pt-2 mt-2">
            <span class="font-semibold">Total:</span>
            <span class="font-semibold">100</span> <!-- I replaced the dynamic total with a static value -->
        </div>
    
        <!-- Checkout button -->
        <div class="text-center mt-4">
            <a href="/checkout" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">Checkout</a>
        </div>
    </div>
</nav>