<?php
session_start(); 

if(!isset($_SESSION['date_from'])) {
	$_SESSION['date_from'] = $_POST['date_from'];
}
if(!isset($_SESSION['date_to'])) {
	$_SESSION['date_to'] = $_POST['date_to'];
}
if(!isset($_SESSION['persons'])) {
	$_SESSION['persons'] = $_POST['persons'];
}
if(!isset($_SESSION['location'])) {
	$_SESSION['location'] = $_POST['location'];
}

$location = $_GET['location'];

include_once 'dbconnect.php';

$where = "";
$sort = "";

if ($_GET['rating']) {
	$where .= "WHERE ";
	$where .= "star_rating = '";
	$where .= $_GET['rating']."'";
}
if (($_GET['rating']) and ($_GET['price'])) {
	$where .= " AND ";
}
if ($_GET['price']) {
	list($pricefrom, $priceto) = explode("-", $_GET['price']);
	if ($pricefrom) {
		$where .= "WHERE ";
		$where .= "price > '";
		$where .= $pricefrom."'";
	}
	if ($pricefrom) {
		$where .= " AND price < '";
		$where .= $priceto."'";
	}
}
if ($_GET['location']) {
	$where .= "WHERE city LIKE '";
	$where .= $location."'";
	$where .= "OR country LIKE '";
	$where .= $location."'";
}
$locationssearch = explode(", ", $_POST['location']);
$locationsearch = $locationssearch[0];
if ($_POST['location']) {
	$where .= "WHERE city LIKE '";
	$where .= $locationsearch."'";
	$where .= "OR country LIKE '";
	$where .= $locationsearch."'";
}

if($_GET['sort']) {
	$sort .= "ORDER BY";
	if($_GET['sort'] == "nameASC") {
		$sort .= " hotelname ASC";
	} else if($_GET['sort'] == "nameDESC") {
		$sort .= " hotelname DESC";
	} else if($_GET['sort'] == "priceASC") {
		$sort .= " price ASC";
	} else if($_GET['sort'] == "priceDESC") {
		$sort .= " price DESC";
	} else if($_GET['sort'] == "starASC") {
		$sort .= " star_rating ASC";
	} else if($_GET['sort'] == "starDESC") {
		$sort .= " star_rating DESC";
	}
}

$today = date('Y/m/d',strtotime("+1 days"));

$hotelqry = 'SELECT * FROM snapbid_hotels 
JOIN snapbid_rooms ON snapbid_hotels.id = snapbid_rooms.hotel_id 
LEFT JOIN snapbid_reserves ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id  AND ("'.$today.'" BETWEEN snapbid_reserves.reserve_date_from AND snapbid_reserves.reserve_date_to) '.$where.'
GROUP BY snapbid_hotels.hotelname
 '.$sort.'';
$result_select = mysql_query($hotelqry) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'inc/head.php'; ?>
    
<body>
<!--Header Include-->
    <?php include 'inc/nav-alt.php'; ?>
<!--Header Include End-->
    
<!--Results Includes-->
	<?php include 'inc/date-search.php'; ?>
    <?php include 'inc/results.php'; ?>
    <?php include 'inc/mapview.php'; ?>
<!--Results Includes End-->
    
<!--Footer Include-->  
    <?php include 'inc/whymail.php'; ?> 

<script type="text/javascript">
  var delay = 0;
  var infowindow = new google.maps.InfoWindow();
  var latlng = new google.maps.LatLng(51.514512, -0.085831);
  var mapOptions = {
    zoom: 10,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var geocoder = new google.maps.Geocoder(); 
  var map;
  var bounds = new google.maps.LatLngBounds();

  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

 	

  function geocodeAddress(address, next) {
    geocoder.geocode({address:address}, function (results,status)
      { 
         if (status == google.maps.GeocoderStatus.OK) {
          var p = results[0].geometry.location;
          var lat=p.lat();
          var lng=p.lng();
          createMarker(address,lat,lng);
        }
        else {
           if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
            nextAddress--;
            delay++;
          } else {
                        }   
        }
        next();
      }
    );
  }
 function createMarker(add,lat,lng) {
   var contentString = add;
   var marker = new google.maps.Marker({
     position: new google.maps.LatLng(lat,lng),
     map: map, 
	 icon: 'http://snapbid.azurewebsites.net/img/mapmarker.png',
           });


  google.maps.event.addListener(marker, 'click', function() {
     infowindow.setContent(contentString); 
     infowindow.open(map,marker);
   });

   bounds.extend(marker.position);

 }
  var locations = [
           <?php foreach($rows as $row) : ?>'<?php echo $row['hotelname']; ?>, <?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['country']; ?>',<?php endforeach; ?>
			 ''
  ];
  var nextAddress = 0;
  function theNext() {
    if (nextAddress < locations.length) {
      setTimeout('geocodeAddress("'+locations[nextAddress]+'",theNext)', delay);
      nextAddress++;
    }
  }
  theNext();

  function nah() {
	$(".map_view_overlay").addClass("overlay_show");
	$(".mapBox").addClass("map_resize");
	if($(".map_resize").length > 0) {
		google.maps.event.trigger(map, 'resize');
		map.setCenter(latlng);
		map.setZoom(12);
		$(this).unbind();
	}
  }

  $(".mapBox").bind("click", nah);

  $(".map_view_overlay").click(function(){
	$(".mapBox").removeClass("map_resize");
	$(".map_view_overlay").removeClass("overlay_show");
	$(".mapBox").bind("click", nah);
		google.maps.event.trigger(map, 'resize');
		map.setCenter(latlng);
		map.setZoom(10);
  });
</script>
   
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>