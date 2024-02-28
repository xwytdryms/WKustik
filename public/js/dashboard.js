var map = L.map("map").setView([-7.797068, 110.370529], 12);
var mainLayer = L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
    {
        attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: "mapbox/streets-v11",
        accessToken:
            "pk.eyJ1IjoiYWZyaXphbG9reSIsImEiOiJja2tnZDdqYW8wZDVqMm9sYWk5eHI3ODZlIn0.mzPjVy5zJUnJgrwuIQn89g",
    }
);
map.addLayer(mainLayer);

// marker

var marker = L.marker([-7.7657780949706865, 110.37176451322523])
    .addTo(map)
    .bindPopup('<a href="/monitoringpd">Ke Halaman Monitoring PD</a>')
    .openPopup();

// tambah lokasi

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Tambahkan Lokasi " + e.latlng.toString())
        .openOn(map);
}

map.on("click", onMapClick);
