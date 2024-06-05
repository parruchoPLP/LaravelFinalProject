@extends('layouts.app')

@section('title','KeyPhone')

@section('pageTitle','Buy KeyPhone Now!')

@section('content')
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
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('quantity').addEventListener('change', function () {
            var customQuantityInput = document.getElementById('custom-quantity');
            if (this.value === 'other') {
                customQuantityInput.style.display = 'block';
            } else {
                customQuantityInput.style.display = 'none';
            }
        });
    });
</script>
@endpush