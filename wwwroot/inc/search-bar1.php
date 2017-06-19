<div class="container search-bar search disable">
    <div class="row">
        <form action="results.php" method="post" class="form-inline">
			<div class="input-group icn">
				<i class="flaticon-map5">&nbsp;</i>
			</div>
			<div class="input-group">
					<input required type="text" id="location" name="location" class="placepicker" value="<?php echo $_GET['location']; ?>" placeholder="Location"/>
			</div>
			<div class="input-group icn">
				<i class="fa fa-calendar">&nbsp;</i>
			</div>
			<div class="input-group">
					<select required style="width:100%" id="from" id="date" name="date_from">
						<option>Check in date</option>
						<?php
						// Set timezone
							date_default_timezone_set('UTC');
 
						// Start date
							$date = date("d-m-Y");
						// End date
							$end_date = '2016-12-31';
 
						while (strtotime($date) <= strtotime($end_date)) {
                			echo "<option value='$date'>$date</option>";
                		$date = date ("d-m-Y", strtotime("+1 day", strtotime($date)));
						}
 
						?>
					</select>
			</div>
			<div class="input-group icn">
				<i class="fa fa-angle-right">&nbsp;</i>
			</div>
			<div class="input-group">
					<select required style="width:100%" id="to" id="date" name="date_to">
						<option>Check out date</option>
						<?php
						// Set timezone
							date_default_timezone_set('UTC');
 
						// Start date
							$date = date("d-m-Y");
						// End date
							$end_date = '2016-12-31';
 
						while (strtotime($date) <= strtotime($end_date)) {
                			echo "<option value='$date'>$date</option>";
                		$date = date ("d-m-Y", strtotime("+1 day", strtotime($date)));
						}
 
						?>
					</select>
			</div>
			<div class="input-group icn">
				<i class="fa fa-users">&nbsp;</i>
			</div>
			<div class="input-group">
					<input required placeholder="Person(s)" type="tel" id="persons" name="persons">
			</div>
			<div class="input-group btn">
					<input class="s-btn" type="submit" value="Submit Search">
			</div>
        </form>
    </div>
</div>






