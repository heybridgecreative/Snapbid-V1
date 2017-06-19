<h2>Special Events</h2>
<h4>Here are a list of upcoming events that may take your fancy.</h4><p> Looking for a weekend away or a weeks holiday for a specific time of the year, then use the links below to begin your search based around an event.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$query = 'SELECT * from snapbid_special_events WHERE featured = 1 ORDER BY specialevent_date ASC ';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
foreach($rows as $row) : ?> 
   
<?php $date = strtotime($row['specialevent_date']); ?>

	<div class="special-event col-xs-12 col-sm-6">
		<div class="inner">
			<div class="image col-xs-6" style="background-image:url(<?php echo $row['specialevent_image']; ?>); background-size:cover;"></div>
			<div class="caption col-xs-6">
				<h2><?php echo $row['specialevent_name'];?></h2> 
				<h4 style="font-size:12px;"><?php echo date('d/m/Y' ,$date); ?> </h4>
				<p><?php echo $row['specialevent_desc'];?></p>
				<p class="btn"><a href="#">Begin the Search</a></p>
			</div>
			<div style="height:0px; clear:both;"></div>
		</div>
	</div>

<?php endforeach ?>

