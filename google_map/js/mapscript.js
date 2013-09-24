function initialize() {

        var latlng = new google.maps.LatLng(61.773123,14.751892);

        var myOptions = {
          zoom: 5,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
          var trucks = [
          [59.333682, 18.015408],
          [59.298544, 17.996718]
          ];

          for (var i = 0; i < trucks.length; i++) {
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(trucks[i][0], trucks[i][1]),
              map: map,
            });
          }
}

window.onload = initialize;