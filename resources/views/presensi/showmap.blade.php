<style>
    #map {
        height: 250px;
    }

</style>

<div id="map"></div>
<script>
    var lokasi = "{{ $presensi->lokasi_in }}"; // variable lokasi mengambil dari data split
    var lok = lokasi.split(",");               // ada 2 array pemisal longtitude dan latitude dengan koma 
    var latitude = lok[0];
    var longitude = lok[1];
    var map = L.map('map').setView([latitude, longitude], 16);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var marker = L.marker([latitude, longitude]).addTo(map);
    var circle = L.circle([latitude, longitude], {
        color: 'red'
        , fillColor: '#f03'
        , fillOpacity: 0.5
        , radius: 20
    }).addTo(map);

    var popup = L.popup()
        .setLatLng([latitude, longitude])
        .setContent("{{ $presensi->nama_lengkap }}")
        .openOn(map);
    
        setInterval(function(){ 
                navigator.geolocation.getCurrentPosition(updateLocation,  
                    function(error) {console.error("Error getting location: ", error);}, 
                    { 
                        enableHighAccuracy: true, 
                        maximumAge: 0, 
                        timeout: 5000 
                    } 
                ); 
            }, 5000);
            else {console.log("Geolocation tidak didukung oleh browser ini."); 
                document.getElementById('status').innerText = "Geolocation tidak didukung"; } 
    startLocationTracking();
</script>
