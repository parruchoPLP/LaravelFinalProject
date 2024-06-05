@extends('layouts.app')

@if(Request::is('login'))
@section('title','Login')
@endif

@if(Request::is('signup'))
@section('title','Signup')
@endif

@section('content')
<div class="bg-custom-darkBlue bg-opacity-50 flex justify-center items-center min-h-screen"> 
    @if(Request::is('login'))
    <section class="bg-white p-14 rounded-2xl shadow-lg mx-auto max-w-4xl text-custom-darkBlue flex text-lg">
        <div class="w-2/5 flex items-center justify-center border-r-2 border-custom-lightGray pr-5">
            <img src="{{ asset('images/loginpic.png') }}" class="rounded-lg">
        </div>
        <div class="w-3/5 pl-8">
            <h2 class="text-5xl text-sky-950 font-bold mb-6">Log in</h2>
            <form action="/authenticate" method="POST">
                @csrf
                <div class="mb-4 relative">
                    <label for="email" class="block text-sky-950 font-bold mb-2">Email Address</label>
                    <div class="flex items-center relative">
                        <input type="email" id="email" name="email" class="border-b form-input w-full pr-10 focus:outline-none" placeholder="Enter your email address" required autofocus>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-4 relative">
                    <label for="password" class="block text-sky-950 font-bold mb-2">Password</label>
                    <div class="flex items-center relative">
                        <input type="password" id="password" name="password" class="border-b form-input w-full focus:outline-none pr-10" placeholder="Enter your password" required>
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                            <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                        </button>
                    </div>
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
            <h3 class="text-l mt-6">Doesn't have an account yet? <a href="/signup" class="text-custom-darkBlue font-bold hover:underline">Sign up here</a>. </h3>
        </div>
    </section>
    @endif

    @if(Request::is('signup'))
    <section class="bg-white p-14 rounded-2xl shadow-md mx-auto max-w-4xl text-custom-darkBlue flex text-lg">
        <div class="w-2/5 flex items-center justify-center border-r-2 border-custom-lightGray p-5"> 
            <img src="{{ asset('images/signuppic.png') }}" class="rounded-lg">
        </div>
        <div class="w-3/5 pl-8"> 
            <h2 class="text-5xl font-bold">Welcome!</h2>
            <h3 class="text-2xl mb-6">Sign up account</h3>
            <form action="/store" method="POST">
                @csrf
                <div class="mb-4 relative">
                    <label for="name" class="block text-sky-950 font-bold mb-2">Full Name</label>
                    <div class="flex items-center relative">
                        <input type="text" id="name" name="name" class="border-b form-input w-full pr-10 focus:outline-none" placeholder="Enter your full name" required autofocus>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="mb-4 relative">
                    <label for="email" class="block text-sky-950 font-bold mb-2">Email Address</label>
                    <div class="flex items-center relative">
                        <input type="email" id="email" name="email" class="border-b form-input w-full pr-10 focus:outline-none" placeholder="Enter your email address" required autofocus>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="mb-4 relative">
                    <label for="password" class="block text-sky-950 font-bold mb-2">Password</label>
                    <div class="flex items-center relative">
                        <input type="password" id="password" name="password" class="border-b border-custom-lightGray form-input w-full focus:outline-none" placeholder="Enter your password" required>
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 text-custom-darkBlue focus:outline-none">
                            <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-4 relative">
                    <label for="password_confirmation" class="block text-sky-950 font-bold mb-2">Confirm Password</label>
                    <div class="flex items-center relative">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="border-b border-custom-lightGray form-input w-full focus:outline-none" placeholder="Confirm your password" required>
                        <button type="button" id="toggleConfirmPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                            <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                        </button>
                    </div>
                </div>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div>
                    <button type="submit" name="submit" class="bg-custom-darkBlue text-white font-bold px-6 py-2 rounded-xl mt-4 hover:bg-custom-lightGray hover:text-custom-darkBlue">Register</button>
                </div>
            </form>
            <h3 class="text-l mt-6">Already have an account? <a href="/login" class="text-custom-darkBlue font-bold hover:underline">Log in here</a>. </h3>
        </div>
    </section>
    @endif
</div> 
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function (e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });

            const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
            const confirmPassword = document.querySelector('#password_confirmation');

            toggleConfirmPassword.addEventListener('click', function (e) {
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
        });
    </script>
@endpush