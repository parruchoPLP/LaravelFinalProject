<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Phone</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">Key Phone</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Store</a></li>
                <li><a href="#" class="hover:text-gray-300">Support</a></li>
                <li><a href="#" class="hover:text-gray-300">About Us</a></li>
            </ul>
        </div>
    </nav>
    <section class="bg-gray-900 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Welcome to Key Phone</h1>
            <p class="text-lg">Are you a gadget lover? Do you want to keep up with the latest technology trends? Look no further than Typhone! Our store offers a variety of gadgets that are sure to take consumers by storm. From smartphones to laptops, to iPads, to smartwatches, we got what you're looking for.</p>
            <a href="#" class="mt-6 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded">Shop Now</a>
        </div>
    </section>
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-4">Featured Brands</h2>
            <div class="flex justify-center items-center space-x-8">
                <img src="https://via.placeholder.com/100" alt="Brand 1">
                <img src="https://via.placeholder.com/100" alt="Brand 2">
                <img src="https://via.placeholder.com/100" alt="Brand 3">
                <img src="https://via.placeholder.com/100" alt="Brand 4">
                <img src="https://via.placeholder.com/100" alt="Brand 5">
                <img src="https://via.placeholder.com/100" alt="Brand 6">
                <img src="https://via.placeholder.com/100" alt="Brand 7">
                <img src="https://via.placeholder.com/100" alt="Brand 8">
                <img src="https://via.placeholder.com/100" alt="Brand 9">
                <img src="https://via.placeholder.com/100" alt="Brand 10">
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <?php for($i = 0; $i < 4; $i++): ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Phone" class="w-full">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Phone Name</h3>
                        <p class="text-gray-700">$999</p>
                        <button class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date('Y'); ?> Key Phone. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
