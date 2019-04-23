//intialize the map
function initialize() {
  var mapOptions = {
    zoom: 16,
    scrollwheel: false,
    center: new google.maps.LatLng(lat, log)
  };

var map = new google.maps.Map(document.getElementById('map-single'),
      mapOptions);


// MARKERS
/****************************************************************/

//add a marker1
var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    icon: domain_complet+'public/img/site/pin.png'
});


// INFO BOXES
/****************************************************************/

//show info box for marker1
var contentString =  '<div class="info-box"><img src="'+domain_complet+'/public/img/site/property-img1.jpg" class="info-box-img" alt="" />'+
                    '<h5>'+title+'</h5>' + 
                    '<p>Endereço: '+address+', '+district+', '+city+
                    '</p><a href="'+domain_complet+'imovel/'+codeIm+'" class="button small">Detalhes</a><br/></div>';

var infowindow = new google.maps.InfoWindow({ content: contentString });

google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);

