<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Profile Information</title>
</head>
<body class="bg-custom-lightGray flex justify-center items-center min-h-screen">
    <section class="bg-white flex-col p-10 rounded-2xl shadow-md mx-auto text-custom-darkBlue flex" style="min-width: 30%;">
        <h2 class="text-6xl text-sky-950 font-bold mb-6">Profile</h2>
        <hr class="border-custom-darkBlue rounded-full mb-10">
        <form id="profileForm" class="text-lg">
            <div class="mb-4">
                <label for="name" class="block text-sky-950 font-bold mb-2">Full Name</label>
                <div class="flex">
                    <input type="text" id="name" name="name" class="border-b mr-4 form-input w-full focus:outline-none" readonly>
                    <button type="button" class="editButton hover:text-custom-gold hover:underline font-bold px-2 py-1 flex items-center">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sky-950 font-bold mb-2">Email Address</label>
                <div class="flex">
                    <input type="email" id="email" name="email" class="border-b mr-4 form-input w-full focus:outline-none" readonly>
                    <button type="button" class="editButton hover:text-custom-gold hover:underline font-bold px-2 py-1 flex items-center">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <label for="contactNum" class="block text-sky-950 font-bold mb-2">Contact Number</label>
                <div class="flex">
                    <input type="text" id="contactNum" name="contactNum" class="border-b mr-4 form-input w-full focus:outline-none" readonly>
                    <button type="button" class="editButton hover:text-custom-gold hover:underline font-bold px-2 py-1 flex items-center">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </button>
                </div>
            </div>
            <div class="mb-4 relative">
                <label for="currentPassword" class="block text-sky-950 font-bold mb-2">Current Password</label>
                <input type="password" id="currentPassword" name="currentPassword" class="border-b form-input w-full focus:outline-none" readonly>
                <button type="button" id="toggleCurrentPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                    <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                </button>
            </div>
            <div id="passwordFields" class="hidden">
                <div class="mb-4 relative">
                    <label for="newPassword" class="block text-sky-950 font-bold mb-2">New Password</label>
                    <input type="password" id="newPassword" name="newPassword" class="border-b form-input w-full focus:outline-none" placeholder="Enter new password">
                    <button type="button" id="toggleNewPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                        <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                    </button>
                </div>
                <div class="mb-4 relative">
                    <label for="confirmPassword" class="block text-sky-950 font-bold mb-2">Confirm New Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="border-b form-input w-full focus:outline-none" placeholder="Confirm new password">
                    <button type="button" id="toggleConfirmPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center h-full text-custom-darkBlue focus:outline-none">
                        <i class="fas fa-eye text-custom-darkBlue hover:text-custom-gold"></i>
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <button type="button" id="changePasswordButton" class="bg-custom-darkBlue text-white font-bold px-6 py-2 rounded-xl hover:bg-custom-gold hover:text-custom-darkBlue">Change Password</button>
            </div>
            <hr class="border-custom-darkBlue rounded-full mt-10 mb-10">
            <div class="mb-4"> 
                <button type="submit" id="saveButton" class="bg-custom-darkBlue text-white font-bold px-6 py-2 rounded-xl hover:bg-custom-gold hover:text-custom-darkBlue hidden">Save</button>
            </div>
        </form>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.editButton');
            const saveButton = document.getElementById('saveButton');
            const passwordFields = document.getElementById('passwordFields');
            const newPasswordField = document.getElementById('newPassword');
            const confirmPasswordField = document.getElementById('confirmPassword');
            const currentPasswordField = document.getElementById('currentPassword');
            const toggleCurrentPasswordField = document.getElementById('toggleCurrentPassword');
            const toggleNewPasswordField = document.getElementById('toggleNewPassword');
            const toggleConfirmPasswordField = document.getElementById('toggleConfirmPassword');

            function enableEdit(event) {
                const parent = event.target.parentElement;
                const inputField = parent.querySelector('input');
                inputField.removeAttribute('readonly');
                saveButton.classList.remove('hidden');
            }

            function saveInfo() {
                document.querySelectorAll('input').forEach(input => {
                    input.setAttribute('readonly', true);
                });
                saveButton.classList.add('hidden');
                passwordFields.classList.add('hidden');
            }

            function togglePasswordVisibility(field) {
                const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
                field.setAttribute('type', type);
                const icon = field.nextElementSibling.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            }

            editButtons.forEach(button => {
                button.addEventListener('click', enableEdit);
            });
            saveButton.addEventListener('click', saveInfo);
            toggleNewPasswordField.addEventListener('click', () => togglePasswordVisibility(newPasswordField));
            toggleConfirmPasswordField.addEventListener('click', () => togglePasswordVisibility(confirmPasswordField));
            toggleCurrentPasswordField.addEventListener('click', () => togglePasswordVisibility(currentPasswordField));
            
            const changePasswordButton = document.getElementById('changePasswordButton');
            changePasswordButton.addEventListener('click', function() {
                passwordFields.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
