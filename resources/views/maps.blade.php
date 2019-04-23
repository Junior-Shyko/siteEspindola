<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="map"></div>
    <script>
      //GLOBALIZANDO URL
     var project_survey = ':8000';
     domin  =  window.location.protocol + "//" + window.location.hostname;
     var domain_complet = domin + project_survey; 
     var url = window.location.origin;
      var map;
      var markers = [];
      
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -3.71839, lng: -38.5434},
          zoom: 13
        });

        showcoor();

      }
     
      function showcoor()
      {
        $.get(domain_complet+'/showmaps', function(data) {
          $.each(data, function(index, val) {
             /* iterate through array or object */
            var position = new google.maps.LatLng(val.immobiles_latitude , val.immobiles_longitude);

            var marker = new google.maps.Marker({
              position : position,
              map: map,
              draggable: true,
              animation: google.maps.Animation.DROP,
              title: val.immobiles_property_title
            })

            marker.addListener('click', toggleBounce);

            markers.push(marker);
          });
        });
      }

      function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBisdaSyLJ4WC4bFxEFA5rdhGq_8B1B52I&callback=initMap"
    async defer></script>
  </body>
</html>