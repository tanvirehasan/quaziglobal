<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Quazi Global')</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
        <!-- CSS -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/lightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/project.css') }}"> --}}

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


        @stack('css')
    </head>
<body>

    @include('layout.inc.header')

    <main class="page-wrapper">
        @yield('content')
    </main>

    @include('layout.inc.footer')


    <!-- JS -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/stellar.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/particles.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/stickysidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js')



<script>
var map;
var markers = [];
var countries = [
    { name: 'Afghanistan', code: 'af', lat: 34.5553, lng: 69.2075, color: '#1a1a1a' },
    { name: 'Bangladesh', code: 'bd', lat: 23.6850, lng: 90.3563, color: '#006a4e' },
    { name: 'Canada', code: 'ca', lat: 56.1304, lng: -106.3468, color: '#ff0000' },
    { name: 'China', code: 'cn', lat: 35.8617, lng: 104.1954, color: '#de2910' },
    { name: 'Denmark', code: 'dk', lat: 56.2639, lng: 9.5018, color: '#c8102e' },
    { name: 'India', code: 'in', lat: 20.5937, lng: 78.9629, color: '#ff9933' },
    { name: 'Malaysia', code: 'my', lat: 4.2105, lng: 101.9758, color: '#010066' },
    { name: 'Nepal', code: 'np', lat: 28.3949, lng: 84.1240, color: '#dc143c' },
    { name: 'Singapore', code: 'sg', lat: 1.3521, lng: 103.8198, color: '#ed2939' },
    { name: 'Thailand', code: 'th', lat: 15.8700, lng: 100.9925, color: '#ed1c24' },
    { name: 'UK', code: 'gb', lat: 55.3781, lng: -3.4360, color: '#012169' },
    { name: 'USA', code: 'us', lat: 37.0902, lng: -95.7129, color: '#3c3b6e' },
    { name: 'Vietnam', code: 'vn', lat: 14.0583, lng: 108.2772, color: '#da251d' }
];

function initMap() {
    // Initialize map
    map = L.map('global-map-container', {
        center: [25, 70],
        zoom: 2,
        minZoom: 1,
        maxZoom: 8,
        scrollWheelZoom: true
    });

    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add markers
    countries.forEach(function(country, index) {
        var flagUrl = 'https://flagcdn.com/w40/' + country.code + '.png';
        
        var icon = L.divIcon({
            className: 'custom-div-icon',
            html: '<div class="marker-pulse" style="background: ' + country.color + '30;"></div>' +
                  '<div class="marker-pin" style="border-color: ' + country.color + '; border-top-color: ' + country.color + ';">' +
                  '<img src="' + flagUrl + '" alt="' + country.name + '">' +
                  '</div>',
            iconSize: [44, 52],
            iconAnchor: [22, 52],
            popupAnchor: [0, -52]
        });

        var marker = L.marker([country.lat, country.lng], {icon: icon}).addTo(map);
        
        var popupFlagUrl = 'https://flagcdn.com/w80/' + country.code + '.png';
        marker.bindPopup(
            '<div class="popup-content">' +
            '<img src="' + popupFlagUrl + '" alt="' + country.name + '" class="popup-flag">' +
            '<span class="popup-country">' + country.name + '</span>' +
            '</div>'
        );
        
        markers.push(marker);
    });
}

function flyToCountry(index) {
    var country = countries[index];
    map.flyTo([country.lat, country.lng], 5, {duration: 1.5});
    
    setTimeout(function() {
        markers[index].openPopup();
    }, 1600);
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', initMap);

// If DOM already loaded
if (document.readyState === 'complete' || document.readyState === 'interactive') {
    initMap();
}
</script>
</body>
</html>