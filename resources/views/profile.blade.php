@extends('layouts.app')

@section('title','Profile Information')

@section('content')
<div class="bg-custom-darkBlue flex-col bg-opacity-50 flex justify-center items-center min-h-screen">
    <section class="bg-white flex-col px-14 py-10 mb-2 rounded-t-2xl border-b-4 border-custom-darkBlue shadow-md mx-auto text-custom-darkBlue flex" style="min-width: 50%;">
        <h2 class="text-6xl text-sky-950 font-bold">Profile</h2> 
    </section>
    <section class="bg-white flex-col p-14 rounded-b-2xl shadow-md mx-auto text-custom-darkBlue flex" style="min-width: 50%;">
        <form id="profileForm" class="text-lg flex" action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="w-1/2 pr-6">
                <div class="mb-4">
                    <label for="name" class="block text-sky-950 font-bold mb-2">Full Name</label>
                    <div class="flex items-center relative">
                        <input type="text" id="name" name="name" class="border-b form-input w-full focus:outline-none pr-10" value="{{ old('name', Auth::user()->name) }}" readonly>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sky-950 font-bold mb-2">Email Address</label>
                    <div class="flex items-center relative">
                        <input type="email" id="email" name="email" class="border-b form-input w-full focus:outline-none pr-10" value="{{ old('email', Auth::user()->email) }}" readonly>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="contactNum" class="block text-sky-950 font-bold mb-2">Contact Number</label>
                    <div class="flex items-center relative">
                        <input type="text" id="contactNum" name="contact_number" class="border-b form-input w-full focus:outline-none pr-10" value="{{ old('contact_number', Auth::user()->details->mobile_number ?? '') }}" readonly>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sky-950 font-bold mb-2">Address</label>
                    <div class="flex items-center relative">
                        <input type="text" id="address" name="address" class="border-b form-input w-full focus:outline-none pr-10" value="{{ old('address', Auth::user()->details->address ?? '') }}" readonly>
                    </div>
                </div>
            </div>
            <div class="w-1/2 pl-6">
                <div class="mb-4 relative">
                    <label for="currentPassword" class="block text-sky-950 font-bold mb-2">Current Password</label>
                    <div class="flex items-center relative">
                        <input type="password" id="currentPassword" name="current_password" class="border-b w-full focus:outline-none pr-10" readonly>
                        <button type="button" id="toggleCurrentPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                            <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-4 relative">
                    <button type="button" id="changePasswordButton" class="text-custom-darkBlue hover:underline hover:text-custom-blueGray hidden">Change Password</button>
                </div>
                <div id="passwordFields" class="hidden">
                    <div class="mb-4 relative">
                        <label for="newPassword" class="block text-sky-950 font-bold mb-2">New Password</label>
                        <div class="flex items-center relative">
                            <input type="password" id="password" name="password" class="border-b form-input w-full focus:outline-none pr-10" placeholder="Enter new password">
                            <button type="button" id="toggleNewPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                                <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-4 relative">
                        <label for="confirmPassword" class="block text-sky-950 font-bold mb-2">Confirm New Password</label>
                        <div class="flex items-center relative">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="border-b form-input w-full focus:outline-none pr-10" placeholder="Confirm new password">
                            <button type="button" id="toggleConfirmPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                                <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                            </button> 
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr class="bg-gray-200 h-1 rounded-full mt-10 mb-10">
        <div class="mb-4 flex items-center"> 
            <button type="button" id="editButton" class="bg-custom-darkBlue text-white text-xl font-bold px-6 py-2 rounded-xl hover:bg-custom-gold hover:text-custom-darkBlue">Edit</button>
            <button type="submit" form="profileForm" id="saveButton" class="ml-4 bg-custom-darkBlue text-white text-xl font-bold px-6 py-2 rounded-xl hover:bg-custom-gold hover:text-custom-darkBlue hidden">Save</button>
        </div> 
    </section>
</div>
@if ($errors->any())
    <x-errorAlert :errors="$errors"/>
@endif
@if (session('success'))
        <x-successAlert successTitle="Update Success!" :successInfo="session('success')"/>
    @endif
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButton = document.getElementById('editButton');
        const saveButton = document.getElementById('saveButton');
        const passwordFields = document.getElementById('passwordFields');
        const newPasswordField = document.getElementById('newPassword');
        const confirmPasswordField = document.getElementById('confirmPassword');
        const currentPasswordField = document.getElementById('currentPassword');
        const toggleCurrentPasswordField = document.getElementById('toggleCurrentPassword');
        const toggleNewPasswordField = document.getElementById('toggleNewPassword');
        const toggleConfirmPasswordField = document.getElementById('toggleConfirmPassword');
        
        function enableEdit() {
            document.querySelectorAll('#profileForm input').forEach(input => {
                input.removeAttribute('readonly');
            });
            saveButton.classList.remove('hidden');
            editButton.classList.add('hidden');
            changePasswordButton.classList.remove('hidden');
        }

        function saveInfo() {
            document.querySelectorAll('#profileForm input').forEach(input => {
                input.setAttribute('readonly', true);
            });
            saveButton.classList.add('hidden');
            editButton.classList.remove('hidden');
            passwordFields.classList.add('hidden');
            changePasswordButton.classList.add('hidden');
        }

        function togglePasswordVisibility(field) {
            const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
            field.setAttribute('type', type);
            const icon = field.nextElementSibling.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        }

        editButton.addEventListener('click', enableEdit);
        saveButton.addEventListener('click', saveInfo);
        toggleNewPasswordField.addEventListener('click', () => togglePasswordVisibility(newPasswordField));
        toggleConfirmPasswordField.addEventListener('click', () => togglePasswordVisibility(confirmPasswordField));
        toggleCurrentPasswordField.addEventListener('click', () => togglePasswordVisibility(currentPasswordField));
        
        const changePasswordButton = document.getElementById('changePasswordButton');
        changePasswordButton.addEventListener('click', function() {
            passwordFields.classList.toggle('hidden');
        });

        newPasswordField.addEventListener('input', function() {
            if (newPasswordField.value.trim() !== '') {
                saveButton.classList.remove('hidden');
            } else {
                saveButton.classList.add('hidden');
            }
        });
    });
</script>
@endpush
