//intialize the map
function initialize() {
  var mapOptions = {
    zoom: 13,
    scrollwheel: false,
    center: new google.maps.LatLng(-3.71839, -38.5434)
  };

var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
var contentString = 0;
 infowindow;
// MARKERS
/****************************************************************/

//add a marker1
var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    icon: domain_complet+'public/img/site/pin.png'
});


$.get(domain_complet+'showmaps', function(data) {
  $.each(data, function(index, val) {
    //add a marker
    console.log("valor: ".val);
    index = new google.maps.Marker({
      position: new google.maps.LatLng(val.immobiles_latitude, val.immobiles_longitude),
      map: map,
      icon: domain_complet+'public/img/site/pin.png',
      title: val.immobiles_property_title
    });

    val.immobiles_id = '<div class="info-box"><img src="'+domain_complet+'/public/img/site/property-img1.jpg" class="info-box-img" alt="" />'+
                    '<h5>'+val.immobiles_property_title+'</h5>' + 
                    '<p>Endereço: '+val.immobiles_address+', '+val.immobiles_district+', '+val.immobiles_city+
                    '</p><a href="'+domain_complet+'imovel/'+val.immobiles_code+'" class="button small">Detalhes</a><br/></div>';
    

    val.immobiles_code = new google.maps.InfoWindow({ 
        content: val.immobiles_id,
        maxWidth: 200 
    });
    
    index.addListener('click', function() {
      //index.setAnimation(google.maps.Animation.BOUNCE);
      val.immobiles_code.open(map,index);
    });


  });
});

// ANIMAÇÃO
/****************************************************************/

// INFO BOXES
/****************************************************************/

//show info box for marker1
var contentString = '<div class="info-box"><img src="'+domain_complet+'/public/img/site/property-img1.jpg" class="info-box-img" alt="" /><h4>587 Smith Avenue</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ultrices metus' + 
                    ' sit amet [...]</p><a href="#" class="button small">View Details</a><br/></div>';

var infowindow = new google.maps.InfoWindow({ content: contentString });

google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });


// //show info box for marker2
// google.maps.event.addListener(marker2, 'click', function() {
//     infowindow.open(map,marker2);
//   });

// //show info box for marker3
// google.maps.event.addListener(marker3, 'click', function() {
//     infowindow.open(map,marker3);
//   });

// //show info box for marker4
// google.maps.event.addListener(marker4, 'click', function() {
//     infowindow.open(map,marker4);
//   });

// //show info box for marker5
// google.maps.event.addListener(marker5, 'click', function() {
//     infowindow.open(map,marker5);
//   });

// //show info box for marker6
// google.maps.event.addListener(marker6, 'click', function() {
//     infowindow.open(map,marker6);
//   });

 }

google.maps.event.addDomListener(window, 'load', initialize);