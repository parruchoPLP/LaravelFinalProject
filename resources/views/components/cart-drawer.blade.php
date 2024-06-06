<div id="drawer-cart" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-96 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label">
    <h5 id="drawer-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
        <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>Cart
    </h5>
    <button type="button" data-drawer-hide="drawer-cart" aria-controls="drawer-cart" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    
    <!-- Cart items will be dynamically added here -->
    @if($cartItems->isEmpty())
        <p class="text-center text-gray-500 dark:text-gray-400">Your cart is empty.</p>
    @else
        @foreach ($cartItems as $item)
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center">
                    <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" class="w-12 h-12 mr-2 rounded">
                    <div>
                        <div class="text-lg font-semibold">{{ $item->product->name }}</div>
                        <div class="text-gray-500">Quantity: {{ $item->quantity }}</div>
                        <div class="text-gray-500">{{ $item->product->price }}</div>
                    </div>
                </div>
                <form action="{{ route('cart.removeFromCart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                    <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M2 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zM8 14a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1zM5 8a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        @endforeach

        <!-- Cart total -->
        <div class="flex justify-between border-t border-gray-200 pt-2 mt-2">
            <span class="font-semibold">Total:</span>
            <span class="font-semibold">
                {{
                    $cartItems->sum(function($item) {
                        // Remove 'Php ' and commas from the price string and convert it to an integer
                        $priceWithoutPhp = str_replace('Php ', '', $item->product->price);
                        $priceWithoutComma = str_replace(',', '', $priceWithoutPhp);
                        $priceInt = intval($priceWithoutComma);

                        // Calculate the total for each item and return the result
                        return $item->quantity * $priceInt;
                    })
                }}
            </span>
        </div>
    @endif

    <!-- Checkout button -->
    <div class="text-center mt-4">
        @if($cartItems->isEmpty())
            <button class="bg-gray-500 text-white px-4 py-2 rounded cursor-not-allowed" disabled>Checkout</button>
        @else
            <a href="/checkout" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">Checkout</a>
        @endif
    </div>
</div>
