@extends('layouts.app')

@section('title','KeyPhone')

@section('pageTitle','Buy KeyPhone Now!')

@section('content')
<div class="card-holder bg-white mt-5 rounded-lg" style="margin: 100px;">
    <div class="text-right p-10">
        <img src="{{ asset($keyphone['image']) }}" alt="15" class="w-100 h-auto mx-auto float-left" style="max-width: 100%; height: auto;">
    </div>
    <div class="product-details flex flex-col p-20">
        <h2 class="text-4xl font-bold mb-4 text-custom-darkBlue">{{ $keyphone['name'] }}</h2>
        <p class="text-xl font-bold mb-4">{{ $keyphone['price'] }}</p>
        <p class="text-yellow-400 font-semibold text-xl mb-4">{{ $keyphone['rating'] }}</p>
        
        @auth
        <form action="{{ route('cart.addToCart') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $keyphone['id'] }}">
            <div class="w-1/5">
                <p class="text-gray-700 mb-2">Quantity:</p>
                <select id="quantity" name="quantity" class="mb-4">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="other">Other:</option>
                </select>
                <input type="number" id="custom-quantity" name="custom_quantity" class="mb-4" style="display: none;" placeholder="Enter quantity" min="1">
            </div>
            <button type="submit" class="bg-custom-darkBlue text-white text-center py-2 px-6 rounded-lg hover:bg-custom-blueGray">Add to Cart</button>
        </form>
        @else
        <div class="w-1/5">
            <p class="text-gray-700 mb-2">Quantity:</p>
            <select id="quantity" class="mb-4">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="other">Other:</option>
            </select>
            <input type="number" id="custom-quantity" class="mb-4" style="display: none;" placeholder="Enter quantity" min="1">
        </div>
        <div class="w-1/5">
            <a href="/login" class="block bg-custom-darkBlue text-white text-center py-2 px-6 rounded-lg hover:bg-custom-blueGray">Add to Cart</a>
        </div>
        @endauth
    </div>
    <div class="description p-20">
        <h2 class="text-2xl font-bold mb-4 text-custom-darkBlue">Description</h2>
        <p class="text-gray-700 mb-6">
            {!! $formattedSpecifications !!}
        </p>
    </div>
</div>
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
        var quantitySelect = document.getElementById('quantity');
        var customQuantityInput = document.getElementById('custom-quantity');
        
        quantitySelect.addEventListener('change', function () {
            if (this.value === 'other') {
                customQuantityInput.style.display = 'block';
                customQuantityInput.name = 'quantity';
                quantitySelect.name = 'unused_quantity';
            } else {
                customQuantityInput.style.display = 'none';
                customQuantityInput.name = 'custom_quantity';
                quantitySelect.name = 'quantity';
            }
        });
    });
</script>
@endpush
