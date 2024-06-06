@extends('layouts.app')

@section('title','About Us')

@section('styles')
    <style>
        .flip-card {
        width: 250px; 
        height: 300px; 
        perspective: 1000px;
        }

        .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.5s;
        transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        }

        .flip-card-back {
        transform: rotateY(180deg);
        }

        .flip-card-front img,
        .flip-card-back img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }
    </style>
@endsection

@section('content')
<section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/phones-bg.jpeg') }}');">
<div class="bg-custom-darkBlue bg-opacity-75 py-20 flex flex-wrap items-center justify-center p-10 relative z-20">
    <section class="Delship w-10/12 bg-white rounded-3xl shadow-2xl py-10">
    <section class="aboutus mb-11 mt-8">
            <div class="container mx-auto px-4 flex flex-col justify-center items-center text-custom-darkBlue">
                <h1 class="FAQ__h1 text-6xl font-bold mb-7 text-center my-5">About Us</h1>
                <p class="FAQ__p text-4xl text-center mb-5">Learn more about KeyPhone</p>
            </div>
        <section class="FAQcontent--aboutus mt-10 flex flex-col items-center gap-10">
            <div class="outerdiv__aboutus flex flex-col items-center gap-16">
                <div class="div__aboutus flex flex-col gap-5">
                    <h1 class="text-4xl font-bold text-custom-gold text-center">Our Mission</h1>
                    <p class="text-2xl max-w-5xl text-center text-justify">
                        We, at KeyPhone are committed to be the leading Filipino retailer of gadgets. KeyPhone is a committed company of talented individuals who provide superior quality gadgets. Our mission at KeyPhone is to empower people to enhance their lives through innovative technology. We strive to design and provide cutting-edge gadgets that are not only functional and intuitive but also beautiful and enjoyable to use. Our commitment to quality and reliability ensures that our products are built to last and exceed our customers' expectations. We aim to make technology accessible to all by providing affordable solutions that meet the needs of diverse lifestyles. At KeyPhone, we believe in continuous improvement, and we are dedicated to staying at the forefront of the industry, pushing boundaries, and exploring new possibilities to improve people's daily lives.
                    </p>
                </div>

                <div class="div__aboutus flex flex-col gap-5">
                    <h1 class="text-4xl font-bold text-custom-gold text-center">Our Vision</h1>
                    <p class="text-2xl max-w-5xl text-center text-justify">
                        At KeyPhone, our mission is to empower our customers by providing them with the latest and greatest gadgets from around the world. We are committed to offering a wide range of high-quality products at competitive prices, backed by excellent customer service and support. We believe that everyone deserves access to cutting-edge technology that enhances their lives, and we strive to make this a reality for our customers. We value transparency and honesty in all of our business dealings, and we seek to build lasting relationships with our customers based on trust and mutual respect. Our goal is to be the go-to destination for gadget enthusiasts and tech-savvy consumers, offering a seamless shopping experience both online and in-store.
                    </p>
                </div>

                <div class="div__aboutus flex flex-col gap-5">
                    <h1 class="text-4xl font-bold text-custom-gold text-center">Our Team: CEO and Founders</h1>
                    <p class="text-2xl max-w-5xl text-center text-justify">
                        At KeyPhone, we have a team of passionate individuals who strive to bring you the best in gadgets and technology. Meet the visionaries behind our success:
                    </p>
                </div>
            </div>

            <section class="flipcard__container flex gap-10 mt-16 mb-11">
                <div class="flip-card w-64 h-96 perspective-1000">
                    <div class="flip-card-inner relative w-full h-full text-center transition-transform duration-500 transform-style-preserve-3d shadow-lg hover:rotate-y-180">
                        <div class="flip-card-front absolute w-full h-full bg-white" style="background-image: url('images/lovely.png'); background-position: center; background-repeat: no-repeat;">
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white transform rotate-y-180 p-4">
                            <p class="text-sm text-center">
                            Lovely’s financial acumen and strategic foresight guide KeyPhone's financial health. Her meticulous approach to budgeting and investment has been key to the company’s sustainable growth.
                            </p>
                        </div>
                    </div>
                    <div class="flipcard__name mt-4 text-center">
                        <p class="name__h1 font-bold">Lovely Baylon</p>
                        <p class="name__p">CFO</p>
                    </div>
                </div>

                <div class="flip-card w-64 h-96 perspective-1000">
                    <div class="flip-card-inner relative w-full h-full text-center transition-transform duration-500 transform-style-preserve-3d shadow-lg hover:rotate-y-180">
                        <div class="flip-card-front absolute w-full h-full bg-white" style="background-image: url('images/ede.png'); background-position: center; background-repeat: no-repeat;">
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white transform rotate-y-180 p-4">
                            <p class="text-sm text-center">
                            Edelyn's expertise in operations and logistics ensures KeyPhone runs smoothly and efficiently. Her strategic planning and execution have been pivotal in scaling the company's infrastructure.
                            </p>
                        </div>
                    </div>
                    <div class="flipcard__name mt-4 text-center">
                        <p class="name__h1 font-bold">Edelyn Carable</p>
                        <p class="name__p">COO</p>
                    </div>
                </div>

                <div class="flip-card w-64 h-96 perspective-1000">
                    <div class="flip-card-inner relative w-full h-full text-center transition-transform duration-500 transform-style-preserve-3d shadow-lg hover:rotate-y-180">
                        <div class="flip-card-front absolute w-full h-full bg-white" style="background-image: url('images/france.png'); background-position: center; background-repeat: no-repeat;">
                        </div>
                        <div class="flip-card-back absolute w-full h-full bg-white transform rotate-y-180 p-4">
                            <p class="text-sm text-center">
                            With a background in business management and a passion for gadgets, France leads KeyPhone with a vision for cutting-edge products and exceptional service. His guidance has helped KeyPhone become a trusted name in tech retail.
                            </p>
                        </div>
                    </div>
                    <div class="flipcard__name mt-4 text-center">
                        <p class="name__h1 font-bold">France Angelo Alcantara</p>
                        <p class="name__p">CEO</p>
                    </div>
                </div>
                <div class="flip-card w-64 h-96 perspective-1000">
        <div class="flip-card-inner relative w-full h-full text-center transition-transform duration-500 transform-style-preserve-3d shadow-lg hover:rotate-y-180">
            <div class="flip-card-front absolute w-full h-full bg-white" style="background-image: url('images/khla.png'); background-position: center; background-repeat: no-repeat;">
            </div>
            <div class="flip-card-back absolute w-full h-full bg-white transform rotate-y-180 p-4">
                <p class="text-sm text-center">
                Khlarence, our Chief Technology Officer, brings a robust technical background and a knack for innovation to KeyPhone. Her expertise in software development and system architecture ensures our products are at the forefront of technology. Khlarence's dedication to excellence drives KeyPhone's commitment to delivering cutting-edge, reliable gadgets.
                </p>
            </div>
        </div>
        <div class="flipcard__name mt-4 text-center">
            <p class="name__h1 font-bold">Ma. Khlarence Arnau</p>
            <p class="name__p">CTO</p>
        </div>
    </div>

    <!-- New Flip Card 2 -->
    <div class="flip-card w-64 h-96 perspective-1000">
        <div class="flip-card-inner relative w-full h-full text-center transition-transform duration-500 transform-style-preserve-3d shadow-lg hover:rotate-y-180">
            <div class="flip-card-front absolute w-full h-full bg-white" style="background-image: url('images/maine.png'); background-position: center; background-repeat: no-repeat;">
            </div>
            <div class="flip-card-back absolute w-full h-full bg-white transform rotate-y-180 p-4">
                <p class="text-sm text-center">
                Jhermaine's marketing expertise and creative vision have propelled KeyPhone's brand to new heights. His innovative campaigns and customer-focused strategies have significantly increased the company's market presence and customer loyalty.
                </p>
            </div>
        </div>
        <div class="flipcard__name mt-4 text-center">
            <p class="name__h1 font-bold">Jhermaine Parrucho</p>
            <p class="name__p">CMO</p>
        </div>
    </div>
            </section>
        </section>
    </section>
    </section>
</div>
</section>
@if (session('removesuccess'))
    <x-successAlert successTitle="Item Removed!" :successInfo="session('removesuccess')"/>
@endif
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endpush