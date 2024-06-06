@extends('layouts.app')

@section('title','About Us')

@section('styles')
    <style>
        .pay-container .dropdown-content,
        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            opacity: 0;
        }

        .pay-container:hover .dropdown-content,
        .dropdown-content {
            max-height: 1000px;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
<div class="bg-custom-darkBlue flex-col bg-opacity-50 text-white flex justify-center items-center min-h-screen">
    <section class="Delship w-10/12 bg-white rounded-3xl shadow-2xl py-10 mb-32">
        <section class="FAQheader">
            <div class="container mx-auto px-4 flex flex-col justify-center items-center">
                <h1 class="FAQ__h1 text-6xl font-bold mb-7 text-center text-custom-darkBlue my-5">Payment Options</h1>
                <p class="FAQ__p text-2xl text-center text-custom-darkBlue mb-5">Learn more about Payment Options</p>
            </div>
            <section class="FAQcontent mt-8 content-start">
                <div class="container mx-auto items-center flex flex-col justify-center md:w-9/12">
                    <div class="div__pay flex flex-col pay-container">
                        <h1 class="text-3xl font-medium text-black hover:border-b-4 hover:border-custom-gold text-center">Credit/Debit Card</h1>
                        <div class="dropdown-content">
                            <p class="text-2xl max-w-5xl text-center justify-center bg-custom-blueGray rounded-b-xl p-4 mb-4 pb-10">
                            Keyphone accepts all major credit cards (Visa, Mastercard, and etc.)                           
                            </p>
                        </div>
                    </div>
                    <br><br>
                    <div class="div__pay flex flex-col pay-container">
                        <h1 class="text-3xl font-medium text-black hover:border-b-4 hover:border-custom-gold text-center">e-Wallets</h1>
                        <div class="dropdown-content">
                            <p class="text-2xl max-w-5xl text-center justify-center bg-custom-blueGray rounded-b-xl p-4 mb-4 pb-10">
                            Keyphone accepts e-Wallet payments such as Paymaya, Gcash, and Coins.ph
                            </p>
                        </div>
                    </div>
                    <br><br>
                    <div class="div__pay flex flex-col pay-container">
                        <h1 class="text-3xl font-medium text-black hover:border-b-4 hover:border-custom-gold text-center">Online Banking</h1>
                        <div class="dropdown-content">
                            <p class="text-2xl max-w-5xl text-center justify-center bg-custom-blueGray rounded-b-xl p-4 mb-4 pb-10">
                            Keyphone accepts e-Banking payments such as Land Bank and UnionBank
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endpush