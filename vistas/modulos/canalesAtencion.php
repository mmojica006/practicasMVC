<?php
$servidor = Ruta::ctrlRutaServidor();
$urlFrontEnd = Ruta::ctrlRuta();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
$market = ControladorCanales::ctrGetMarcadores();
$xmlDirecciones = $servidor.'vistas/files/markers.xml';

$urlMarkers = $urlFrontEnd.'controladores/markers.xml';

//print_r($market);
?>

<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 350px;
    }


</style>



<div class="paginas-internas" >
    <section class="bienvenidos" style="background: url('<?php echo $servidor; ?>vistas/img/plantilla/paginaExternaCanales.png');no-repeat center top;background-size: cover">




        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4">Sucursales en todo el país</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Le invitamos a visitar nuestras sucursales de forma sencilla, ubique la sucursal más cercana
                    en nuestro mapa para que realice su trámite de forma personalizada.</p>

            </div>

        </div>

    </section>

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Canales de atención

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-12">
                    <h2 class="text-muted">Sucursales en todo el país</h2>
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut cumque delectus, deserunt dolorem eos eum illo in magni maiores maxime modi mollitia nesciunt non numquam odio sint unde, velit?
                    </p>






                </article>
                <aside class="col-md-12">

                    <div id="map">test</div>

                </aside>


            </div>
        </div>
    </main>


</div>


<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAMly39xKOZsO_I43smh7sWafFU7GvMMo&callback=initMap">-->
<!--</script>-->

<script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(12.10142, -86.25901),
          zoom: 8
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
        //  downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            downloadUrl('<?php echo $xmlDirecciones; ?>', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAMly39xKOZsO_I43smh7sWafFU7GvMMo&callback=initMap">
    </script>