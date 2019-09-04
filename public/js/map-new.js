//intialize the map
function initialize() {
  var mapOptions = {
    zoom: 16,
    scrollwheel: false,
    center: new google.maps.LatLng(-3.71839, -38.5434)
  };

var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);


}

initialize();