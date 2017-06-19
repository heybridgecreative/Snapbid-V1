
<?php
$query2 = 'SELECT * from snapbid_reserves LEFT JOIN snapbid_rooms ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id ' .$where. '';
$result_select = mysql_query($query2) or die(mysql_error());
$rows2 = array();
	while($row2 = mysql_fetch_array($result_select))
$rows2[] = $row2;
?>

<script src='../lib/jquery.min.js'></script>
<script src='../lib/moment.min.js'></script>
<script src='../fullcalendar.min.js'></script>

<script>

	$(document).ready(function() {
	



		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,agendaYear'
			},
   			selectable: true,
			selectHelper: true,
   			select: function(start, end, allDay) {
   					var price = prompt('Price');
			
				if (price) {

   					var start = moment(start).format("DD/MM/YYYY");

						function addDays(dt){
							var ds = dt.split("/");
							var startDate = new Date(ds[2], ds[1]-1, ds[0]);   // YYYY/MM/DD - months in Javascript are 0-11
							var daysAhead = -1;
							startDate.setTime(startDate.getTime()+(daysAhead*24*60*60*1000));
							var futureDate = startDate.getDate()+"/"+(startDate.getMonth()+1)+"/"+startDate.getFullYear();
							futureDate = futureDate.replace(/^(\d{1}\/)/,"0$1").replace(/(\d{2}\/)(\d{1}\/)/,"$10$2");
							document.getElementById('end_date').value = futureDate;
						}

					var end = moment(end).format("DD/MM/YYYY");

					var method = "INSERT";
					addDays(end);

					document.getElementById('start_date').value = start;
					document.getElementById('reserve').value = price;
					document.getElementById('method').value = method;

				}
			},
			
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			eventClick: function(calEvent, jsEvent, view) {
				
   					var start = moment(calEvent.start).format("DD/MM/YYYY");

						function addDaysUpdate(dt){
							var ds = dt.split("/");
							var startDate = new Date(ds[2], ds[1]-1, ds[0]);   // YYYY/MM/DD - months in Javascript are 0-11
							var daysAhead = -1;
							startDate.setTime(startDate.getTime()+(daysAhead*24*60*60*1000));
							var futureDate = startDate.getDate()+"/"+(startDate.getMonth()+1)+"/"+startDate.getFullYear();
							futureDate = futureDate.replace(/^(\d{1}\/)/,"0$1").replace(/(\d{2}\/)(\d{1}\/)/,"$10$2");
							document.getElementById('end_date').value = futureDate;
						}

					var endUpdate = moment(calEvent.end).format("DD/MM/YYYY");
					addDaysUpdate(endUpdate);

					var price = calEvent.title;
					var id = calEvent.id;

					var method = "UPDATE"
					
					document.getElementById('start_date').value = start;
					document.getElementById('reserve').value = price;
					document.getElementById('method').value = method;
					document.getElementById('id').value = id;

    		},
			events: [
			<?php foreach($rows2 as $row2) : ?>			
				{	
					id: "<?php echo $row2['reserve_id']; ?>",
					title: "<?php echo $row2['reserve_price']; ?>",
					start: "<?php echo $row2['reserve_date_from']; ?>",
					end: "<?php echo $row2['reserve_date_to']; ?>",
					<?php if($row2['reserve_recurring'] !== "") : ?>
						dow: [ <?php echo $row2['reserve_recurring']; ?> ],
					<?php endif; ?>
				},
			<?php endforeach ?>
			]
		});

		
	});

</script>



	<div id='calendar'></div>


