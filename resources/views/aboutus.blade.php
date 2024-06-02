<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
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
        width: 100%; /* Adjust image width */
        height: 100%; /* Adjust image height */
        object-fit: cover;
        }
        </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-custom-darkBlue py-4 fixed top-0 w-full z-50">
        <div class="container flex justify-between items-center px-4">
            <ul class="flex space-x-6 text-white">
                <li class="text-white text-2xl font-bold">logo</li>
                <li><a href="#" class="text-white text-2xl font-bold">KeyPhone</a></li>
            </ul>
            <ul class="flex space-x-6 text-white w-5">
                <li><a href="homepage" class="hover:border-b hover:border-custom-gold">Home</a></li>
                <li><a href="storepage" class="hover:border-b hover:border-custom-gold">Store</a></li>
                <li><a href="support" class="hover:border-b hover:border-custom-gold">Support</a></li>
            </ul>
        </div>
    </nav>

    <section class="aboutus mt-8">
    <section class="FAQheader bg-custom-gold shadow-md py-6">
            <div class="container mx-auto px-4 flex flex-col justify-center items-center">
                <h1 class="FAQ__h1 text-6xl font-bold mb-7 text-center text-white my-5">About Us</h1>
                <p class="FAQ__p text-4xl text-white text-center mb-5">Learn more about KeyPhone</p>
            </div>
        </section>
        <section class="FAQcontent--aboutus mt-10 flex flex-col items-center gap-10">
            <h1 class="text-6xl font-extrabold text-custom-darkBlue">KeyPhone</h1>
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

            <section class="flipcard__container flex gap-10 mt-16">
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

    <footer class="bg-custom-darkBlue text-white pt-6 mt-20">
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
        <div class="bg-custom-blueGray py-3 mt-6 mb-0">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 KeyPhone. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
