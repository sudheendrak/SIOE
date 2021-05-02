		var myCenter=new google.maps.LatLng(12.320796, 76.587411);
		function initialize()
		{
		  var mapProp = {
			center: myCenter,
			zoom:15,
			disableDefaultUI:true,    
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  
			var marker=new google.maps.Marker({
			  position:myCenter,
			  });

			marker.setMap(map);

			var infowindow = new google.maps.InfoWindow({
			  content:"<b>School of Industry Oriented Engineering </br>& Solutions</b>"
			  });

			infowindow.open(map,marker);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
