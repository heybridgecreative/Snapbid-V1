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
					<input readonly="true" class="datepicker" id="datepicker1" placeholder="Check in date" type="text" name="date_from">
			</div>
			<div class="input-group icn">
				<i class="fa fa-angle-right">&nbsp;</i>
			</div>
			<div class="input-group">
					<input readonly="true" class="datepicker" id="datepicker2"  placeholder="Check out date" type="text" name="date_to">
			</div>
			<div class="input-group icn">
				<i class="fa fa-users">&nbsp;</i>
			</div>
			<div class="input-group">
					<input required placeholder="Person(s)" type="number" inputmode="numeric" pattern="\d*" id="persons" name="persons">
			</div>
			<div class="input-group btn">
					<input class="s-btn" type="submit" value="Submit Search">
			</div>
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
  			minDate: moment().subtract({days: -1}).toDate(),
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





