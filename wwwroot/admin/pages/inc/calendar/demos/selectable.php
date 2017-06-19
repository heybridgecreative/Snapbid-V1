<?php
$query2 = 'SELECT * from snapbid_reserves LEFT JOIN snapbid_rooms ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id ' .$where. '';
$result_select = mysql_query($query2) or die(mysql_error());
$rows2 = array();
	while($row2 = mysql_fetch_array($result_select))
$rows2[] = $row2;
?>

<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<script>

 $(document).ready(function() {
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();

  var calendar = $('#calendar').fullCalendar({
   editable: true,
   header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
   },
   
   events: [
			<?php foreach($rows2 as $row2) : ?>			
				{	
					id: "999",
					title: "<?php echo $row2['reserve_price']; ?>",
					start: "<?php echo $row2['reserve_date_from']; ?>",
					end: "<?php echo $row2['reserve_date_to']; ?>",
					dow: [ <?php echo $row2['reserve_recurring']; ?> ],
				},
			<?php endforeach ?>
			],
   	selectable: true,
   	selectHelper: true,
   	select: function(start, end, allDay) {
   		var title = prompt('Event Title:');
   	if (title) {
   		var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
   		var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
   	$.ajax({
   		url: 'http://localhost:8888/fullcalendar/add_events.php',
   		data: 'title='+ title+'&start='+ start +'&end='+ end ,
   		type: "POST",
   		success: function(json) {
   			alert('Added Successfully');
   		}
   	});
   	calendar.fullCalendar('renderEvent',
   	{
   		title: title,
   start: start,
   end: end,
   allDay: allDay
   },
   true // make the event "stick"
   );
   }
   calendar.fullCalendar('unselect');
   },
   
   editable: true,
   eventDrop: function(event, delta) {
   var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
   $.ajax({
   url: 'http://localhost:8888/fullcalendar/update_events.php',
   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
   type: "POST",
   success: function(json) {
    alert("Updated Successfully");
   }
   });
   },
   eventResize: function(event) {
   var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
   $.ajax({
    url: 'http://localhost:8888/fullcalendar/update_events.php',
    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
    type: "POST",
    success: function(json) {
     alert("Updated Successfully");
    }
   });

}
   
  });
  
 });

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
