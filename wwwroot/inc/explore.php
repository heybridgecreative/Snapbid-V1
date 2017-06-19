


<div style="margin-top:40px;" class="container">
	<h2 style="text-align:center;">Explore</h2>
	<p style="text-align:center;">Find your dream place around the globe</p> 
    <div class="row extras explore">
        <p>&nbsp;</p>

<?php
$query = 'SELECT * from snapbid_home_locations WHERE location_featured = 1 ORDER BY locations_ordering ASC ';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
foreach($rows as $row) : ?>  


        <div class="col-sm-6 col-md-4 col-xs-6">
			<a href="results.php?location=<?php echo $row['location_name']; ?>">
            	<div class="inner extras">
                	<img src="<?php echo $row['location_picture']; ?>">
                	<div class="caption">
                    	<p><?php echo $row['location_name']; ?></p>
                	</div>
            	</div>
			</a>
        </div>      


<?php endforeach; ?>
          
    </div>
</div>

    