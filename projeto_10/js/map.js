

window.onload = function(){

	var map;

	function initialize(){
		var mapProp = {
			center: new google.maps.LatLng(-23.01690675,-43.41707150812303),
			scrollwheel:false,
			zoom:11,
            styles: [{
                stylers: [{
                  saturation: -100
                }]
                 }],
			mapTypeId:google.maps.MapTypeId.ROADMAP
		}

		map = new google.maps.Map(document.getElementById("map"),mapProp);
	}

	function addMarker(lat,long,icon,content,click){
		var latLng = {'lat':lat,'lng':long};

		var marker = new google.maps.Marker({
			position:latLng,
			map:map,
			icon:icon
		});

		var infoWindow = new google.maps.InfoWindow({
			content:content,
			maxWidth:200,
			pixelOffset: new google.maps.Size(0,20)
		});

		if(click == true){
			google.maps.event.addListener(marker,'click',function(){
				infoWindow.open(map,marker);
			});
		}else{
			infoWindow.open(map,marker);
		}
		
	}

	initialize();

	var conteudo = '<p style="color:black;font-size:13px;padding:10px 0;border-bottom:1px solid black;">Right here!</p>';
	addMarker(-23.01690675,-43.41707150812303,'',conteudo,true);


}