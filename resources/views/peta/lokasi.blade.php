<!-- Tampilan Peta Lokasi Absensi -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>
<div id="map" style="height: 400px;"></div>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map)
        .bindPopup("<b>{{ $nama }}</b><br>Absen pada {{ $tanggal }}")
        .openPopup();
</script>