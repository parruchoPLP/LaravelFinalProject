document.addEventListener('DOMContentLoaded', function() {
    const svgLink = document.getElementById('svgLink');
    const searchContainer = document.getElementById('searchContainer');
    const searchBar = document.getElementById('searchBar');
    const searchButton = document.getElementById('searchButton');
    const phoneDropdown = document.getElementById('phoneDropdown');
    const phoneItems = document.querySelectorAll('.phoneItem');
    const supportDropdown = document.getElementById('supportDropdown');
    const supportDropdownContent = document.getElementById('supportDropdownContent');

    document.addEventListener('click', function(event) {
        if(!svgLink.contains(event.target) && !searchContainer.contains(event.target)){
            searchContainer.classList.add('hidden');
            phoneDropdown.classList.add('hidden');
            searchBar.value = '';
        }
        if(!svgLink.contains(event.target) && !supportDropdown.contains(event.target)){
            supportDropdownContent.classList.add('hidden');
        }
    });

    svgLink.addEventListener('click', function(event) {
        event.preventDefault();
        searchContainer.classList.toggle('hidden');
    });

    searchBar.addEventListener('focus', function() {
        phoneDropdown.classList.remove('hidden');
    });

    searchBar.addEventListener('input', function() {
        const searchText = searchBar.value.toLowerCase();
        let matchFound = false;
        let count = 0;
        phoneItems.forEach(function(item) {
            const phoneName = item.getAttribute('phone-name').toLowerCase();
            if (phoneName.includes(searchText) && count < 10) {
                item.style.display = 'flex block';
                if (searchText === phoneName){
                    matchFound = true;
                }
                count++;
            } else {
                item.style.display = 'none';
            }
        });
        if (!matchFound) {
            searchButton.disabled = true;
        } else {
            searchButton.disabled = false;
        }
    });

    searchButton.addEventListener('click', function(event) {
        event.preventDefault();
        let searchTerm = searchBar.value;
        if (searchTerm) {
            const matchedName = Array.from(phoneItems).find(item => item.getAttribute('phone-name') === searchTerm);
            if (matchedName) {
                searchTerm = searchTerm.replace(/\s/g, '').toLowerCase();
                window.location.href = `/product/${searchTerm}`;
            }
        }
    });

    phoneItems.forEach(function(item) {
        item.addEventListener('click', function() {
            let name = this.getAttribute('phone-name');
            name = name.replace(/\s/g, '').toLowerCase();
            window.location.href = `/product/${name}`;
            phoneDropdown.classList.add('hidden');
        });

        item.addEventListener('mouseover', function() {
            searchBar.value = this.getAttribute('phone-name');
        });
    });

    supportDropdown.addEventListener('click', function(event) {
        event.preventDefault();
        supportDropdownContent.classList.toggle('hidden');
    });

    const cartDropdown = document.getElementById("cartDropdown");
    const checkoutButton = document.getElementById("cartButton");

    // Function to toggle the cart dropdown
    function toggleCartDropdown() {
        cartDropdown.classList.toggle("hidden");
    }

    // Event listener for the checkout button
    checkoutButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior
        toggleCartDropdown();
    });
});