<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="icon" href="{{ asset('images/luguu.png') }}" type="image/png">
    <script src="{{ asset('js/NavigationBar.js') }}" defer></script>
    @vite('resources/css/app.css')
    @stack('scripts')
    @yield('styles')
</head>
<body class="bg-gray-100 overflow-x-hidden">
    <div class="flex items-center">
        <img src="{{ asset('images/products/vivo-Y03.png') }}" alt="Website Icon" class="w-8 h-auto mr-2">
        <h1 class="text-2xl font-bold">KeyPhone Store</h1>
    </div>
    
    <header>
        <x-navigation-bar
            :allkeyphone="$allkeyphone"
        />
        
        @if(!Request::is('aboutus') && !Request::is('delivery-and-shipping'))
            <section class="relative bg-cover bg-center" style="background-image: url('{{ asset('images/phones-bg.jpeg') }}');">
                <div class="bg-custom-darkBlue bg-opacity-75 text-white py-32 flex flex-wrap items-center justify-center p-10 relative z-20">
                    <div class="container mx-auto text-center md:w-1/2 lg:w-2/3">
                        <div class="text-center m-8">
                            <h1 class="text-5xl font-bold mb-7">@yield('pageTitle','Default Title')</h1>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </header>

    <main>
        @yield('content')
    </main>

    <x-footer/>
</body>
</html>