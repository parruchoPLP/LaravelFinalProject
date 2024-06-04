document.addEventListener('DOMContentLoaded', function() {
    const svgLink = document.getElementById('svgLink');
    const searchContainer = document.getElementById('searchContainer');
    const searchBar = document.getElementById('searchBar');
    const searchButton = document.getElementById('searchButton');
    const phoneDropdown = document.getElementById('phoneDropdown');
    const phoneItems = document.querySelectorAll('.phoneItem');
    const supportDropdown = document.getElementById('supportDropdown');
    const supportDropdownContent = document.getElementById('supportDropdownContent');

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
});