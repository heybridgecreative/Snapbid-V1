<?php if(isset($_POST['date_from'])) : ?>
<?php $_SESSION['date_from'] = $_POST['date_from']; ?>
<?php endif; ?>

<?php if(isset($_POST['date_to'])) : ?>
<?php $_SESSION['date_to'] = $_POST['date_to']; ?>
<?php endif; ?>

<?php if(isset($_POST['persons'])) : ?>
<?php $_SESSION['persons'] = $_POST['persons']; ?>
<?php endif; ?>

<?php if(isset($_POST['location'])) : ?>
<?php $_SESSION['location'] = $_POST['location']; ?>
<?php endif; ?>

<?php if((isset($_SESSION['date_from'])) || (isset($_SESSION['location'])) || (isset($_SESSION['date_to'])) || (isset($_SESSION['persons']))) : ?>
<h2 class="filters orange">Your Search</h2>
<div class="yoursearch">
	<div class="results">
	<?php if(isset($_SESSION['location'])) : ?>
		<p><strong>Location:</strong><br /><?php echo $_SESSION['location'];?></p>
	<?php else : ?>
		<p>Select a Location:</p>
	<?php endif; ?>

	<?php if($_SESSION['date_from'] === "Check in date") : ?>
		<p>Select a Date From</p>
	<?php else : ?>
		<p><strong>Date From:</strong> <?php echo $_SESSION['date_from'];?></p>
	<?php endif; ?>

	<?php if($_SESSION['date_to'] === "Check out date") : ?>
		<p>Select a Date To:</p>
	<?php else : ?>
		<p><strong>Date To:</strong> <?php echo $_SESSION['date_to'];?></p>
	<?php endif; ?>

	<?php if(isset($_SESSION['persons'])) : ?>
		<p><strong>Persons:</strong> <?php echo $_SESSION['persons'];?></p>
	<?php else : ?>
		<p>Select a number of Persons:</p>
	<?php endif; ?>
	<p>&nbsp;</p>
	<div class="clearsearchbtn">
		Edit Search
	</div>
	</div>

	<div class="editsearch search-bar">
		 <form action="results.php" method="post" class="form-inline">
			<div class="input-group">
					<input required type="text" id="location" name="location" class="placepicker" value="<?php echo $_SESSION['location']; ?>" placeholder="Location"/>
			</div>
			<div class="input-group">
					<input readonly="true" class="datepicker" id="datepicker1" placeholder="Choose your date" type="text" value="<?php echo $_SESSION['date_from'];?>" name="date_from">
			</div>
			<div class="input-group">
					<input readonly="true" class="datepicker" id="datepicker2"  placeholder="Choose your date" type="text" value="<?php echo $_SESSION['date_to'];?>" name="date_to">
			</div>
			<div class="input-group">
					<input required placeholder="Person(s)" type="tel" id="persons" value="<?php echo $_SESSION['persons'];?>" name="persons">
			</div>
			
					<input class="searchbtn" type="submit" value="Submit Search">
			
        </form>
	</div>

</div>
 <script>
    var startDate,
        endDate,
        updateStartDate = function() {
            startPicker.setStartRange(startDate);
            endPicker.setStartRange(startDate);
            endPicker.setMinDate(startDate);
        },
        updateEndDate = function() {
            startPicker.setEndRange(endDate);
            startPicker.setMaxDate(endDate);
            endPicker.setEndRange(endDate);
        },
        startPicker = new Pikaday({
            field: document.getElementById('datepicker1'),
       		format: 'DD-MM-YYYY',
            minDate: new Date(),
            maxDate: new Date(2020, 12, 31),
            onSelect: function() {
                startDate = this.getDate();
                updateStartDate();
            }
        }),
        endPicker = new Pikaday({
            field: document.getElementById('datepicker2'),
       		format: 'DD-MM-YYYY',
            minDate: new Date(),
            maxDate: new Date(2020, 12, 31),
            onSelect: function() {
                endDate = this.getDate();
                updateEndDate();
            }
        }),
        _startDate = startPicker.getDate(),
        _endDate = endPicker.getDate();

        if (_startDate) {
            startDate = _startDate;
            updateStartDate();
        }

        if (_endDate) {
            endDate = _endDate;
            updateEndDate();
        }
    </script>

<?php endif; ?>