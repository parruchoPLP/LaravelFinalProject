<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Log in</title>
</head>
<body class="bg-custom-lightGray">
    <section class="bg-white p-10 rounded-2xl shadow-md mx-auto mt-32 mb-32 max-w-4xl text-custom-darkBlue flex">
        <div class="w-2/5 flex items-center jsutify-center border-r-2 border-custom-lightGray pr-5"> 
            <img src="{{ asset('images/loginpic.png') }}" alt="Key Phone logo" class="rounded-lg">
        </div>
        <div class="w-3/5 pl-8"> 
            <h2 class="text-4xl text-sky-950 font-bold mb-6">Log in</h2>
            <form action="/authenticate" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sky-950 font-bold mb-2">Email Address</label>
                    <input type="email" id="email" name="email" class="border-b form-input w-full focus:outline-none" placeholder="Enter your email address" required autofocus>
                </div>
                <div class="mb-4 relative">
                    <label for="password" class="block text-sky-950 font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="border-b form-input w-full focus:outline-none pr-10" placeholder="Enter your password" required>
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                        <i class="fas fa-eye text-custom-darkBlue hover:text-custom-lightGray"></i>
                    </button>
                </div>
                <div class="mb-4">
                    <input type="checkbox" id="remember" class="mr-1">
                    <label for="remember" class="text-sky-950">Remember me</label>
                </div>
                <div>
                    <button type="submit" name="submit" class="bg-custom-darkBlue text-white font-bold px-6 py-2 rounded-xl mt-4 hover:bg-custom-gold hover:text-custom-darkBlue">Login</button>
                </div>
                @if ($errors->has('email'))
                    <div class="text-red-500">
                        <ul>
                            <li>{{ $errors->first('email') }}</li>
                        </ul>
                    </div>
                @endif
                @if ($errors->has('password'))
                    <div class="text-red-500">
                        <ul>
                            <li>{{ $errors->first('password') }}</li>
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </section>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('svg').classList.toggle('text-custom-darkBlue');
            this.querySelector('svg').classList.toggle('text-red-500');
        });
    </script>
</body>
</html>
