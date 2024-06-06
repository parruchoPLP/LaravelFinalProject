<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<nav class="bg-custom-darkBlue py-2 fixed top-0 w-full z-50 text-lg">
    <div class="w-full container mx-auto flex justify-between items-center p-3">
        <ul class="flex items-center space-x-2 text-white">
            <li><a href="/homepage"><img src="{{ asset('images/keyphone.png') }}" style="width: 50px; height: 50px;"></a></li>
            <li><a href="/homepage" class="text-white text-3xl font-bold">KeyPhone</a></li>
        </ul>
        <ul class="flex space-x-6 text-white ml-auto">
            <li><a href="/homepage" class="hover:border-b hover:border-custom-gold">Home</a></li>
            <li><a href="/storepage" class="hover:border-b hover:border-custom-gold">Store</a></li>
            <li><a href="#" class="hover:border-b hover:border-custom-gold" id="supportDropdown">Support</a></li>
            <li><a href="#" class="flex items-center" id="svgLink">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="ml-4" id="searchIcon">
                    <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ Auth::check() ? '#' : '/login' }}" class="flex items-center" id="cartButton" {{ Auth::check() ? 'data-drawer-target=drawer-cart data-drawer-show=drawer-cart aria-controls=drawer-cart' : '' }}>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            </li>
            <li><a href="{{ Auth::check() ? '/profile' : '/login' }}" class="flex items-center">
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
            @auth
                <form method="POST" action="/logout" class="flex items-center ml-4">
                    @csrf
                    <button type="submit" class="text-white hover:border-b hover:border-custom-gold"> 
                        <a href="#" class="flex items-center" id="signOutLink">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none" class="ml-4" id="signOutIcon">
                                <path d="M16 13V11H7V9H16V7L20 10L16 13ZM12 20H4V4H12V6H6V18H12V20Z" fill="#ffffff"/>
                            </svg>
                        </a> 
                    </button>
                </form>
            @endauth
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
                            <img src="{{ asset($phone['image']) }}" alt="<?= $phone['name'] ?>" class="phone-image w-20 h-auto mr-2">
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
    
    @if (auth()->check())
        <x-cartDrawer :cartItems="$cartItems"/>
    @endif
</nav>