var newMap = L.map('map').setView([43.610769,3.876716], 8);
var fondDeCarte = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png',{
	"attribution": null,
	"detectRetina": false,
	"maxZoom": 18,
	"minZoom": 1,
	"noWrap": false,
	"subdomains": "abc"
}).addTo(newMap);
