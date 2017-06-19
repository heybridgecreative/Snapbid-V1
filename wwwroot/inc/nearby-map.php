<div class="container">
    <div class="row" style="text-align:center; padding-top:20px; padding-bottom:20px;">
        <h1><strong></strong><span style="color:#9f1f63;">Snap</span><span style="color:#f85c37;">Bid</span></strong> Nearby</h1>
        <p>Click the allow button to let the browser find your location.</p>
        

    </div>
</div>
        <div class="overlay-click">
            <article style="min-height:200px;background-image: url(http://media.giphy.com/media/s4KqhlPU9Ypnq/giphy.gif); background-position:50%; background-repeat:no-repeat; background-size:50px 50px;">

            </article>
        </div>
        <script>
        function success(position) {
          var mapcanvas = document.createElement('div');
          mapcanvas.id = 'mapcontainer';
          mapcanvas.style.height = '400px';
          mapcanvas.style.width = '100%';

          document.querySelector('article').appendChild(mapcanvas);

          var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

          var options = {
            zoom: 15,
            center: coords,
            scrollwheel: false,
            draggable: false,
            mapTypeControl: false,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.SMALL
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("mapcontainer"), options);
          
          var iconBase = 'http://www.cmwebdesign.co.uk/heybridge/sb-test/html/img/';
          var hotel1 = new google.maps.LatLng(51.520097, -0.123198);
          var hotel2 = new google.maps.LatLng(51.512192, -0.108091);
          var hotel3 = new google.maps.LatLng(51.511979, -0.158217);
          var hotel4 = new google.maps.LatLng(51.513474, -0.076162);
            
          var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: iconBase + 'pin-user.png'
          });
            
          var marker = new google.maps.Marker({
              position: hotel2,
              map: map,
              icon: iconBase + 'pin-hotel.png'
          });  
            
          var marker = new google.maps.Marker({
              position: hotel1,
              map: map,
              icon: iconBase + 'pin-hotel.png'
          });
        
            var marker = new google.maps.Marker({
              position: hotel3,
              map: map,
              icon: iconBase + 'pin-hotel.png'
          });
            
            var marker = new google.maps.Marker({
              position: hotel4,
              map: map,
              icon: iconBase + 'pin-hotel.png'
          });

        google.maps.event.addListener(marker, 'click', function() {
            map.panTo(this.getPosition());
            map.setZoom(9);
        });  
                        
        }

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(success);
        } else {
          error('Geo Location is not supported');
        }

        </script>
