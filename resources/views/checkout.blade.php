@extends('layouts.app')

@section('title','Checkout Cart')

@section('content')
<section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/phones-bg.jpeg') }}');">
    <div class="bg-custom-darkBlue bg-opacity-75 text-white py-20 flex flex-wrap items-center justify-center p-10 relative z-20">
        <div class="container text-center mx-auto">
            <div class="mt-8">
                <div class="flex flex-col bg-white py-6 px-4 rounded-b-xl shadow border-t-4 border-custom-darkBlue">
                    <div class="flex items-center mb-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
                                <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#213555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#213555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-custom-darkBlue font-bold">Delivery Address</p>
                        </div>
                    </div>
                    <div class="flex items-center mx-2">
                        <div>
                            <p class="text-gray-900 font-bold pr-2">{{ $user->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-900 font-bold pr-8">{{ $user->details->mobile_number ?? 'Please input your mobile number' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-900 font-semibold pr-8">{{ $user->details->address ?? 'Please input your address' }}</p>
                        </div>
                        <div>
                            <a href="{{ route('profile') }}" class="text-custom-blueGray font-semibold hover:border-b hover:border-custom-gold">Change</a>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col">
                    <table class="bg-white rounded-xl shadow mt-2">
                        <tr>
                            <th class="p-4 text-custom-blueGray">Products Ordered</th>
                            <th class="p-4 text-custom-blueGray">Unit Price</th>
                            <th class="p-4 text-custom-blueGray">Quantity</th>
                            <th class="p-4 text-custom-blueGray">Subtotal</th>
                        </tr>
                        @foreach($cartItems as $item)
                        <tr>
                            <td class="p-4">
                                <div class="flex items-center">
                                    <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" class="w-32 h-24 mr-4 ml-1">
                                    <p class="text-custom-darkBlue font-semibold">{{ $item->product->name }}</p>
                                </div>
                            </td>
                            <td class="pt-4">
                                <p class="text-custom-darkBlue">{{ $item->product->price }}</p>
                            </td>
                            <td class="pt-4">
                                <p class="text-gray-700">{{ $item->quantity }}</p>
                            </td>
                            <td class="pt-4">
                                <p class="text-gray-700">
                                    Php {{ number_format($item->quantity * intval(str_replace(['Php', ','], '', $item->product->price)), 2) }}
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="bg-white rounded-xl shadow mt-2">
                        <div class="flex justify-end">
                            <p class="text-custom-blueGray font-bold p-4">Order Total:</p>
                            <p class="text-gray-700 p-4">Php {{ number_format($totalPrice, 2) }}</p>
                        </div>
                    </div>
                    <div class="container text-center mx-auto">
                        <div class="mt-2">
                            <div class="flex flex-col bg-white py-6 px-4 rounded-xl shadow">
                                <div class="flex justify-between mb-2">
                                    <div>
                                        <p class="text-custom-darkBlue font-bold">Payment Method</p>
                                    </div>
                                    <div class="ml-auto">
                                        <p class="text-custom-darkBlue font-semibold">Cash on Delivery</p>    
                                    </div>
                                    <div class="ml-2">
                                        <a href="#" class="text-custom-blueGray font-semibold hover:border-b hover:border-custom-gold">Change</a>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="ml-auto">
                                        <p class="text-custom-darkBlue">Merchandise Subtotal</p>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-custom-darkBlue font-semibold">Php {{ number_format($totalPrice, 2) }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="ml-auto">
                                        <p class="text-custom-darkBlue">Shipping Total</p>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-custom-darkBlue font-semibold">Php 123</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="ml-auto">
                                        <p class="text-custom-darkBlue">Total Payment: </p>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-custom-darkBlue font-semibold text-xl">Php {{ number_format($totalPrice + 123, 2) }}</p>
                                    </div>
                                </div>
                                <div class="flex justify-end pt-6">
                                    <form action="{{ route('cart.placeorder') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="address" value="{{ $user->details->address ?? '' }}">
                                        <input type="hidden" name="mobile_number" value="{{ $user->details->mobile_number ?? '' }}">
                                        <button type="submit" class="bg-custom-darkBlue hover:bg-custom-blueGray text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                            Place Order
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if (session('removesuccess'))
    <x-successAlert successTitle="Item Removed!" :successInfo="session('removesuccess')"/>
@endif
@if ($errors->any())
    <x-errorAlert :errors="$errors"/>
@endif
@endsection

@push('scripts')

@endpush
