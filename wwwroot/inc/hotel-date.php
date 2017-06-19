<div class="container search disable">
    <div class="row">
		<div class="col-xs-12">
		<div class="col-xs-12 search-bar">

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>?hotel_id=<?php echo $_GET['hotel_id']; ?>" method="POST" class="form-inline">
			<div class="input-group">
				<h3>Check availability</h3>
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
					<input placeholder="Person(s)" type="tel" id="persons" name="persons">
			</div>
			<div class="input-group btn">
					<input class="s-btn" type="submit" value="Submit Search">
			</div>



        </form>
				</div>
				</div>
    </div>
</div>
<p>&nbsp;</p>


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


