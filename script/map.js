var newMap = L.map('map').setView([43.610769,3.876716], 8);
var fondDeCarte = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png',{
	"attribution": null,
	"detectRetina": false,
	"maxZoom": 18,
	"minZoom": 1,
	"noWrap": false,
	"subdomains": "abc"
}).addTo(newMap);

var Icon = L.icon({
    iconUrl: 'image/pins.svg',
    iconSize:     [32, 51], // size of the icon
    iconAnchor:   [16, 51], // point of the icon which will correspond to marker's location
    popupAnchor:  [0, -51] // point from which the popup should open relative to the iconAnchor
});

var marker = new L.marker([43.610769,3.876716], {icon: Icon}).bindPopup("Magali Salètes").addTo(newMap);
