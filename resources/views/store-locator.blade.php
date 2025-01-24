@extends('layouts.layout')
@section('title', 'Store Locator')
@section('content')

<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Store Locator</h1>

<<<<<<< HEAD
    <!-- Store Locator Form -->
    <div class="flex justify-center mb-8">
        <input id="search-address" type="text" class="px-4 py-2 rounded-full w-96" placeholder="Enter your nearest city to find stores">
        <button id="search-button" class="bg-blue-500 text-white px-6 py-2 rounded-full ml-4 hover:bg-blue-600">Search</button>
=======
    <!-- Search Form -->
    <div class="mb-6 flex justify-center">
        <input id="searchInput" type="text" class="border rounded-md p-2 w-1/2" placeholder="Search for a branch...">
        <button id="searchButton" class="ml-2 p-2 bg-blue-500 text-white rounded-md">Search</button>
>>>>>>> 5d9d91a (Initial commit or Updated files)
    </div>

    <!-- Google Map -->
    <div id="map" class="w-full h-96 rounded-lg shadow-lg"></div>
</div>
<<<<<<< HEAD
<script>
    // Define the stores array globally
    const stores = [
        {
            name: "Colombo",
            address: "No 45, Flower Road, Colombo 07",
            lat: 6.9271,
            lng: 79.8612,
            details: "Offers a wide variety of perfume decants and refilling services."
        },
        {
            name: "Kandy",
            address: "No 123, Colombo Street, Kandy",
            lat: 7.2944,
            lng: 80.6365,
            details: "Known for its exclusive collection of niche perfume decants. Offers refilling services with eco-friendly packaging."
        },
        {
            name: "Galle",
            address: "No 78, Lighthouse Street, Galle Fort",
            lat: 6.0328,
            lng: 80.2170,
            details: "Located in the historic Galle Fort, this store offers premium perfume decants and convenient refilling options."
        },
        {
            name: "Anuradhapura",
            address: "No 50, Anuradhapura Main Street",
            lat: 8.3114,
            lng: 80.4037,
            details: "Popular for its local perfume selections and exclusive decant options."
        },
        {
            name: "Kurunegala",
            address: "No 20, Kurunegala City Mall",
            lat: 7.4863,
            lng: 80.3647,
            details: "Known for its range of affordable perfume decants and quality refilling services."
        },
        {
            name: "Ratnapura",
            address: "No 15, Gem Street, Ratnapura",
            lat: 6.6828,
            lng: 80.3994,
            details: "Features a unique collection of rare perfume decants and convenient refilling options."
        }
    ];

    // Define initMap globally
    window.initMap = function() {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 6.9271, lng: 79.8612 }, // Default center (Sri Lanka)
            zoom: 8
        });

        const infowindow = new google.maps.InfoWindow();

        // Place markers for all stores
        stores.forEach(store => {
            const marker = new google.maps.Marker({
                map: map,
                position: { lat: store.lat, lng: store.lng },
                title: store.name
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(`
                    <div>
                        <h3>${store.name}</h3>
                        <p>${store.address}</p>
                        <p>${store.details}</p>
=======

<script>
    // Define initMap globally
    window.initMap = function () {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 6.9271, lng: 79.8612 }, // Default center (Sri Lanka)
            zoom: 8,
        });

        const infowindow = new google.maps.InfoWindow();
        let markers = [];

        // Store branch data
        const branches = [
            { name: "Kandy", keywords: ['kandy', 'kegalle', 'matale', 'gampola', 'rambukkana', 'pilimathalawa', 'nuwaraeliya', 'katugasthota', 'nawalapitiya'], lat: 7.287700, lng: 80.642400, address: 'Kandy Address', details: 'Details for Kandy branch' },
            { name: "Colombo", keywords: ['kolonnawa','kadawatha', 'dehiwala', 'colombo', 'nugegoda', 'kollupitiya', 'kaduwela', 'malabe', 'negombo', 'panadura', 'kalutara'], lat: 6.9355080, lng: 79.8529360, address: 'Colombo Address', details: 'Details for Colombo branch' },
            { name: "Galle", keywords: ['galle', 'matara', 'hikkaduwa', 'tangalle', 'deniyaya', 'weligama', 'akuressa', 'hambanthota', 'ambalangoda'], lat: 6.0260838, lng: 80.2163310, address: 'Galle Address', details: 'Details for Galle branch' },
            { name: "Anuradhapura", keywords: ['anuradhapura', 'mihintale', 'habarana', 'thambuththegama', 'kekirawa', 'polonnaruwa', 'medawachchiya'], lat: 8.3365610, lng: 80.4114840, address: 'Anuradhapura Address', details: 'Details for Anuradhapura branch' },
            { name: "Kurunegala", keywords: ['kurunegala', 'mawathagama', 'kuliyapitiya', 'polgahawela', 'dambulla', 'narammala', 'giriulla', 'alawwa', 'maho'], lat: 7.4823680, lng: 80.3595390, address: 'Kurunegala Address', details: 'Details for Kurunegala branch' },
            { name: "Ratnapura", keywords: ['ratnapura', 'pelmadulla', 'balangoda', 'opanayaka', 'embilipitiya', 'badulla', 'belihuloya', 'haputale', 'kuruvita'], lat: 6.6822580, lng: 80.4007600, address: 'Ratnapura Address', details: 'Details for Ratnapura branch' }
        ];

        // Function to add a marker with a "Get Directions" button
        function addMarker(branch) {
            const marker = new google.maps.Marker({
                map: map,
                position: { lat: branch.lat, lng: branch.lng },
                title: branch.name,
            });

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent(`
                    <div>
                        <h3>${branch.name}</h3>
                        <p>${branch.address}</p>
                        <p>${branch.details}</p>
                        <button onclick="getDirections(${branch.lat}, ${branch.lng})" class="bg-blue-500 text-white p-2 rounded-md mt-2">Get Directions</button>
>>>>>>> 5d9d91a (Initial commit or Updated files)
                    </div>
                `);
                infowindow.open(map, marker);
            });
<<<<<<< HEAD
        });

        // Trigger search when the search button is clicked
        document.getElementById('search-button').addEventListener('click', function() {
            searchStores(map, infowindow);
        });
    };

    // Search function
    function searchStores(map, infowindow) {
        const address = document.getElementById('search-address').value.trim().toLowerCase();
        let selectedStore;

        // Define city arrays for each store
        const colomboCities = ['kadawatha', 'dehiwala', 'colombo', 'nugegoda', 'kollupitiya', 'kaduwela', 'malabe','negombo','panadura','kalutara'];
        const galleCities = ['galle', 'matara', 'hikkaduwa', 'tangalle', 'deniyaya', 'weligama','akuressa','hambanthota','ambalangoda'];
        const kandyCities = ['kandy', 'kegalle', 'matale', 'gampola', 'rambukkana', 'pilimathalawa','nuwaraeliya','katugasthota','nawalapitiya'];
        const anuradhapuraCities = ['anuradhapura', 'mihintale', 'habarana', 'thambuththegama','kekirawa','polonnaruwa','medawachchiya'];
        const kurunegalaCities = ['kurunegala', 'mawathagama', 'kuliyapitiya', 'polgahawela','dambulla','narammala','giriulla','alawwa','maho'];
        const ratnapuraCities = ['ratnapura', 'pelmadulla', 'balangoda', 'opanayaka','embilipitiya','badulla','belihuloya','haputale','kuruvita'];

        // Determine the store based on the searched city
        if (colomboCities.includes(address)) {
            selectedStore = stores[0];
        } else if (kandyCities.includes(address)) {
            selectedStore = stores[1];
        } else if (galleCities.includes(address)) {
            selectedStore = stores[2];
        } else if (anuradhapuraCities.includes(address)) {
            selectedStore = stores[3];
        } else if (kurunegalaCities.includes(address)) {
            selectedStore = stores[4];
        } else if (ratnapuraCities.includes(address)) {
            selectedStore = stores[5];
        } else {
            alert("No store found for this location. Please try another nearby city.");
            return;
        }

        // Set map center and display the relevant store info
        map.setCenter({ lat: selectedStore.lat, lng: selectedStore.lng });
        map.setZoom(15);

        const marker = new google.maps.Marker({
            map: map,
            position: { lat: selectedStore.lat, lng: selectedStore.lng },
            title: selectedStore.name
        });

        infowindow.setContent(`
            <div>
                <h3>${selectedStore.name} Store</h3>
                <p>${selectedStore.address}</p>
                <p>${selectedStore.details}</p>
            </div>
        `);
        infowindow.open(map, marker);
    }
</script>
=======

            markers.push(marker);
        }

        // Add markers for all branches initially
        branches.forEach(branch => {
            addMarker(branch);
        });

        // Handle search functionality
        document.getElementById('searchButton').addEventListener('click', function () {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const branchToShow = branches.find(branch => branch.keywords.some(keyword => keyword.toLowerCase() === searchTerm));

            if (branchToShow) {
                // Clear existing markers
                markers.forEach(marker => marker.setMap(null));
                markers = [];

                // Add the marker for the selected branch
                addMarker(branchToShow);

                // Center the map to the selected branch
                map.setCenter({ lat: branchToShow.lat, lng: branchToShow.lng });
                map.setZoom(12); // Zoom in closer for better visibility
            } else {
                alert('No branch found for the search term.');
            }
        });

        // Function to get directions from the user's location to the branch
        window.getDirections = function(lat, lng) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    const userLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    const directionsService = new google.maps.DirectionsService();
                    const directionsRenderer = new google.maps.DirectionsRenderer();
                    directionsRenderer.setMap(map);

                    const request = {
                        origin: userLocation,
                        destination: { lat: lat, lng: lng },
                        travelMode: google.maps.TravelMode.DRIVING
                    };

                    directionsService.route(request, function (result, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsRenderer.setDirections(result);
                        } else {
                            alert('Directions request failed due to ' + status);
                        }
                    });
                });
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        };
    };
</script>


>>>>>>> 5d9d91a (Initial commit or Updated files)
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ1-sdpIHmBI8fyl_F4xT-a-PBoz5qvQY&libraries=places&callback=initMap" defer></script>
@endsection
