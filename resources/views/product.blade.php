<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyPhone</title>
    <link rel="icon" href="{{ asset('images/luguu.png') }}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 overflow-x-hidden">
    <div class="flex items-center">
        <img src="{{ asset('images/products/vivo-Y03.png') }}" alt="Website Icon" class="w-8 h-auto mr-2">
        <h1 class="text-2xl font-bold">KeyPhone Store</h1>
    </div>
    <x-navigation-bar
        :allkeyphone="$allkeyphone"
    />

    <section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/phones-bg.jpeg') }}');">
        <div class="bg-custom-darkBlue bg-opacity-75 text-white py-12 flex flex-wrap items-center justify-center p-10 relative z-20">
            <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
                <div class="text-center">
                    <h1 class="text-5xl font-bold mt-5">Buy KeyPhone Now!</h1>
                     </div>
            </div>
        </div>
    </section>

    <div class="card-holder bg-white mt-5 rounded-lg" style="margin: 100px;">
    <div class="text-right p-10">
        <img src="{{ $keyphone['image'] }}" alt="15" class="w-100 h-auto mx-auto float-left" style="max-width: 100%; height: auto;">
    </div>
    <div class="product-details flex flex-col p-20">
        <h2 class="text-4xl font-bold mb-4 text-custom-darkBlue">{{ $keyphone['name'] }}</h2>
        <p class="text-xl font-bold mb-4">{{ $keyphone['price'] }}</p>
        <p class="text-yellow-400 font-semibold text-xl mb-4">{{ $keyphone['rating'] }}</p>
        <div class="w-1/5">
            <p class="text-gray-700 mb-2">Quantity:</p>
            <select id="quantity" class="mb-4">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="other">Other:</option>
            </select>
            <input type="number" id="custom-quantity" class="mb-4" style="display: none;" placeholder="Enter quantity">
            <button class="bg-custom-darkBlue text-white text-center py-2 px-6 rounded-lg hover:bg-custom-blueGray">Add to Cart</button>
        </div>
    </div>
    <div class="description p-20">
        <h2 class="text-2xl font-bold mb-4 text-custom-darkBlue">Description</h2>
        <p class="text-gray-700 mb-6">
            {!! $formattedSpecifications !!}
        </p>
    </div>
</div>


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
        var allProducts = <?php echo json_encode($allkeyphone) ?>;

        document.addEventListener('DOMContentLoaded', function() {
            const svgLink = document.getElementById('svgLink');
            const searchContainer = document.getElementById('searchContainer');
            const searchBar = document.getElementById('searchBar');
            const searchButton = document.getElementById('searchButton');
            const brandDropdown = document.getElementById('brandDropdown');
            const brandItems = document.querySelectorAll('.brandItem');
            const supportDropdown = document.getElementById('supportDropdown');
            const supportDropdownContent = document.getElementById('supportDropdownContent');
            const phoneDropdown = document.getElementById('phoneDropdown');
            const phoneItems = document.querySelectorAll('.phoneItem');
            const header = document.querySelector('nav');

            svgLink.addEventListener('click', function(event) {
                event.preventDefault();
                searchContainer.classList.toggle('hidden');
            });

            searchBar.addEventListener('focus', function() {
                phoneDropdown.classList.remove('hidden');
            });

            supportDropdown.addEventListener('click', function(event) {
                event.preventDefault();
                supportDropdownContent.classList.toggle('hidden');
            });

            searchBar.addEventListener('input', function() {
                const searchText = searchBar.value.toLowerCase();
                let matchFound = false;
                let count = 0;
                phoneItems.forEach(function(item) {
                    const phoneName = item.getAttribute('phone-name').toLowerCase();
                    if (phoneName.includes(searchText) && count < 10) {
                        item.style.display = 'flex block';
                        matchFound = true;
                        count++;
                    } else {
                        item.style.display = 'none';
                    }
                });
                if (!matchFound) {
                    searchButton.disabled = true;
                } else {
                    searchButton.disabled = false;
                }
            });

            document.getElementById('quantity').addEventListener('change', function () {
                var customQuantityInput = document.getElementById('custom-quantity');
                if (this.value === 'other') {
                    customQuantityInput.style.display = 'block';
                } else {
                    customQuantityInput.style.display = 'none';
                }
            });

            searchButton.addEventListener('click', function(event) {
                event.preventDefault();
                const searchTerm = searchBar.value;
                if (searchTerm) {
                    const matchedName = Array.from(phoneItems).find(item => item.getAttribute('phone-name') === searchTerm);
                    if (matchedName) {
                        searchTerm = searchTerm.replace(/\s/g, '').toLowerCase();
                        window.location.href = `/product/${searchTerm}`;
                    } else {
                        window.location.href = `search?query=${searchTerm}`;
                    }
                }
            });

            phoneItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    let name = this.getAttribute('phone-name');
                    name = name.replace(/\s/g, '').toLowerCase();
                    window.location.href = `/product/${name}`;
                    phoneDropdown.classList.add('hidden');
                });
    
                item.addEventListener('mouseover', function() {
                    searchBar.value = this.getAttribute('phone-name');
                });
            });
        });
    </script>
</body>
</html>