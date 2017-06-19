<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
	
<?php
$path = "/home/httpd/html/index.php";
$file = basename($path);         
$file = basename($path, ".php"); 
?>

	<title>SnapBid - <?php echo $file; ?></title>

    <link rel="apple-touch-icon" sizes="114x114" href="img/iphone.jpg" />

	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Styling -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css" />

    <!-- Icons --> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/snapicon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
         
    <link href="css/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-slider.css" />
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="css/pikaday.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/pikaday.js"></script>
    <script src="js/jquery.datetimepicker.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAjTApW0528nRkzmJKIKyIzOVU_gi9g1HM&sensor=true&libraries=places"></script>

    <script src="js/jquery.placepicker.js"></script>
    
    <!-- video.js must be in the <head> for older IEs to work. -->
    <script src="js/video.js"></script>

  	<!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  	<script>
    	videojs.options.flash.swf = "js/video-js.swf";
  	</script>

	<script src="js/bootstrap-slider.js" type="text/javascript"></script>

    
<script>
$(document).ready(function() {
    var interval = 500;
    var timerIds = [];
    var links = $('#card-drop > div');

    $.each(links, function(index, value) {      
        if (index == links.length - 1) {
            timerIds.push(window.setTimeout(function() {
                $.each(timerIds, function(idx, val) { 
                    clearTimeout(val);
                });
                while (timerIds.length) {timerIds.pop();}
            }, interval*(index + 2)));
        }
      
        timerIds.push(window.setTimeout(function() {
            $(value).toggleClass('md-show');
        }, interval*(index + 1)));
    });      
});
</script>  
    

<?php 
function createDateRangeArray($start, $end) {
// Modified by JJ Geewax 

	$range = array();

	if (is_string($start) === true) $start = strtotime($start);
	if (is_string($end) === true ) $end = strtotime($end);

	do {
		$range[] = date('Y-m-d', $start);
		$start = strtotime("+ 1 day", $start);
	}
	while($start < $end);

	return $range;
}
?>
    

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73015723-1', 'auto');
  ga('send', 'pageview');

</script>
    
</head>

