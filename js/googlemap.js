function initMap() {
        var uluru = {lat: 12.320796, lng: 76.587411};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
