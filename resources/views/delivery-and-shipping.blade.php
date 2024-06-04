@extends('layouts.app')

@section('title','Delivery and Shipping')

@section('content')
    <section class="Delship py-10 w-full">
        <section class="FAQheader bg-custom-gold shadow-md py-6">
            <div class="container mx-auto px-4 flex flex-col justify-center items-center">
                <h1 class="FAQ__h1 text-6xl font-bold mb-7 text-center text-white my-5">Delivery and Shipping</h1>
                <p class="FAQ__p text-2xl text-white text-center mb-5">Learn more about delivery and shipping</p>
            </div>
        </section>
        <section class="FAQcontent mt-8 content-start">
            <div class="container mx-auto items-center flex flex-col justify-center">
                <h1 class="FAQcontent__h1 text-4xl font-bold text-gray-800 text-center mb-4">Frequently Asked Questions</h1><br/><br/>
                
                <div x-data="{ open: false }" class="w-full md:w-6/12">
                    <button @click="open = !open" class="FAQcontent__btn FAQcontent__btn--1 w-full text-3xl text-gray-800 text-center font-semibold hover:border-b-2 hover:border-custom-gold">
                        Which areas do you deliver?
                    </button>
                    <div x-show="open" class="del__content del__content--1 text-3xl text-gray-800 text-center bg-gray-100 p-4 mb-4">
                        We deliver nationwide.
                    </div>
                </div>
                <br/><br/>
                <div x-data="{ open: false }" class="w-full md:w-6/12">
                    <button @click="open = !open" class="FAQcontent__btn FAQcontent__btn--2 w-full text-3xl text-gray-800 text-center font-semibold hover:border-b-2 hover:border-custom-gold">
                        Which couriers do you use?
                    </button>
                    <div x-show="open" class="del__content del__content--2 text-3xl text-gray-800 text-center bg-gray-100 p-4 mb-4">
                        For Metro Manila orders, we use J&T express. <br />
                        For provincial orders, we use LBC.
                    </div>
                </div>
                <br/><br/>
                <div x-data="{ open: false }" class="w-full md:w-6/12">
                    <button @click="open = !open" class="FAQcontent__btn FAQcontent__btn--3 w-full text-3xl text-gray-800 text-center font-semibold hover:border-b-2 hover:border-custom-gold">
                        How long do I have to wait before I get my order?
                    </button>
                    <div x-show="open" class="del__content del__content--3 text-gray-800 text-3xl text-center bg-gray-100 p-4 mb-4">
                        <b>Metro Manila:</b> within 1-5 working days <br />
                        <b>Outside Metro Manila:</b> within 5-10 working days
                    </div>
                </div>
                <br/><br/>
                <div x-data="{ open: false }" class="w-full md:w-6/12">
                    <button @click="open = !open" class="FAQcontent__btn FAQcontent__btn--4 w-full text-3xl text-gray-800 text-center font-semibold hover:border-b-2 hover:border-custom-gold">
                        Do you offer free shipping?
                    </button>
                    <div x-show="open" class="del__content del__content--4 text-gray-800 text-3xl text-center bg-gray-100 p-4 mb-4">
                        It depends on the current promotion, members can access free shipping vouchers.
                    </div>
                </div>
                
            </div>
        </section>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endpush