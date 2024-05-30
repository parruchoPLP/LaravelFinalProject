<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Sign up</title>
</head>
<body class="bg-custom-lightGray">
    <section class="bg-custom-gold p-10 rounded-2xl shadow-md mx-auto mt-32 mb-32 max-w-4xl text-custom-darkBlue flex">
        <div class="w-2/5 flex items-center jsutify-center border-r border-custom-darkBlue pr-10"> 
            <img src="{{ asset('images/signuppic.png') }}" alt="Key Phone logo" class="rounded-lg">
        </div>
        <div class="w-3/5 pl-8"> 
            <h2 class="text-4xl font-bold">Welcome!</h2>
            <h3 class="text-l mb-6">Sign up account</h3>
            <form action="/store" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sky-950 font-bold mb-2">Full Name</label>
                    <input type="text" id="name" name="name" class="bg-custom-gold border-b border-custom-blueGray form-input w-full focus:outline-none" placeholder="Enter your full name" required autofocus>
                </div>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="mb-4">
                    <label for="email" class="block text-sky-950 font-bold mb-2">Email Address</label>
                    <input type="email" id="email" name="email" class="bg-custom-gold border-b border-custom-blueGray  form-input w-full focus:outline-none" placeholder="Enter your email address" required autofocus>
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="mb-4 relative">
                    <label for="password" class="block text-sky-950 font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="bg-custom-gold border-b border-custom-blueGray form-input w-full focus:outline-none" placeholder="Enter your password" required>
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                        <i class="fas fa-eye text-custom-darkBlue hover:text-custom-lightGray"></i>
                    </button>
                </div>
                <div class="mb-4 relative">
                    <label for="password_confirmation" class="block text-sky-950 font-bold mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="bg-custom-gold border-b border-custom-blueGray form-input w-full focus:outline-none" placeholder="Confirm your password" required>
                    <button type="button" id="toggleConfirmPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                        <i class="fas fa-eye text-custom-darkBlue hover:text-custom-lightGray"></i>
                    </button>
                </div>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div>
                    <button type="submit" name="submit" class="bg-custom-darkBlue text-white font-bold px-6 py-2 rounded-xl mt-4 hover:bg-custom-lightGray hover:text-custom-darkBlue">Register</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const password = document.querySelector('#password');
        const confirmPassword = document.querySelector('#password_confirmation');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('svg').classList.toggle('text-custom-darkBlue');
            this.querySelector('svg').classList.toggle('text-red-500');
        });

        toggleConfirmPassword.addEventListener('click', function (e) {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.querySelector('svg').classList.toggle('text-custom-darkBlue');
            this.querySelector('svg').classList.toggle('text-red-500');
        });
    </script>
</body>
</html>
