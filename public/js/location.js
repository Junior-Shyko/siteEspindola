 
 var x = $("#demo_loc");
var lati = "";
var long = "";
 function getLocation() {
 	if (navigator.geolocation) {
		 navigator.geolocation.getCurrentPosition(showPosition);
		 console.log('getlocation');
 	} else { 
 		x.innerHTML = "Geolocation is not supported by this browser.";
 	}
 }

 function showPosition(position) {
 	x.innerHTML = "Latitude: " + position.coords.latitude + 
 	"<br>Longitude: " + position.coords.longitude;
	$.get('https://maps.googleapis.com/maps/api/geocode/json?latlng='+position.coords.latitude+','+position.coords.longitude+'&key=AIzaSyBisdaSyLJ4WC4bFxEFA5rdhGq_8B1B52I', function(data) {
 		coordenadas = data;	                                                                                                          
		
 		$.ajax({
 			url: domain_complet + 'adicionar-ip',
 			type: 'POST',
 			dataType: 'JSON',
 			data: {
 				locations_user_agent: navigator.userAgent, 
 				locations_ip: ip, 
 				locations_route: route_loc, 
 				locations_latitude:  position.coords.latitude, 
 				locations_longitude: position.coords.longitude, 
 				locations_city: coordenadas.results[0].address_components[3].long_name, 
 				locations_country: coordenadas.results[0].address_components[6].long_name, 
 				locations_regionName: coordenadas.results[0].address_components[5].long_name, 
 				locations_timezone:'America/Fortaleza',
 				locations_page_previous: route_loc,
 				locations_date_time: date_time ,
 				_token: token

 			},
 			sucess: function(data){
 				console.log("Sucesso: " + data);
 			},
 		});

 	});




 }