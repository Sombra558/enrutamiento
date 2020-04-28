<html>
<head>
    <meta charset="utf-8" />
    <title>Leaflet Routing Machine Example</title>

    <link href='{{ asset("css/app.css") }}' rel="stylesheet">
    <link rel="stylesheet" href="leaflet-routing-machine.css" />
    
    <style>
        .map {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
        <div id="app">
          <div id="map" class="map"></div>
        </div>
  
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="leaflet-routing-machine.js"></script>
    <script>
                     var map = L.map('map');
                     var miscoodenadas=null
                     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);                  
                        function buscarLocalizacion(e) {
                        L.marker(e.latlng).addTo(map);
                        }
                        function errorLocalizacion(e) {
                        alert("No es posible encontrar su ubicación. Es posible que tenga que activar la geolocalización.");
                        }
                        map.on('locationerror', errorLocalizacion);
                        map.on('locationfound', buscarLocalizacion);
                        map.locate({setView: true, maxZoom:18});
                        function buscarLocalizacion(e) {
                        miscoodenadas=e.latlng;
                        L.marker(e.latlng).addTo(map);
                        }
    </script>
</body>
</html>
        <!--
        <script>

                     var map = L.map('mapid');
                     var miscoodenadas=null
                     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
                    
                        function buscarLocalizacion(e) {
                        L.marker(e.latlng).addTo(map);
                        }
                        function errorLocalizacion(e) {
                        alert("No es posible encontrar su ubicación. Es posible que tenga que activar la geolocalización.");
                        }
                        map.on('locationerror', errorLocalizacion);
                        map.on('locationfound', buscarLocalizacion);
                        map.locate({setView: true, maxZoom:12});
                        function buscarLocalizacion(e) {
                        miscoodenadas=e.latlng;
                        L.Routing.control({
                        waypoints: [
                            L.latLng(miscoodenadas),
                            L.latLng(miscoodenadas),
                            L.latLng(miscoodenadas)
                        ]
                        }).addTo(map);
                        }
                       
            
        </script>
        -->
  
