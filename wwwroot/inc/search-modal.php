<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="search" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Search for a Hotel or Apartment
            </h4>
         </div>
         <div class="modal-body">
<div class="container search-bar search disable" style="max-height:1000px;">


        <form action="results.php" method="POST">
            <div class="col-xs-12">
                <div class="col-xs-12 icon">
					<i class="flaticon-map5">&nbsp;</i> Choose your location:
				</div>
				<div class="col-xs-12">
					<input type="text" id="location" name="location" class="placepicker" placeholder="Location"/>
				</div>

            </div>

            <div class="col-sm-12">
					<div class="col-xs-12 icon">
                		<i class="fa fa-calendar">&nbsp;</i> Choose your dates:
					</div>
					<div class="col-xs-6">
						<input style="width:100%" id="from" placeholder="From..." type="date" id="date" name="date_from">
					</div>
					<div class="col-xs-6">
						<input style="width:100%" id="to" placeholder="To..." type="date" id="todate" name="date_to">
					</div>
            </div>

             <div class="col-xs-12">
				<div class="col-xs-12 icon">
                	<i class="fa fa-users">&nbsp;</i> How many people:
				</div>
				<div class="col-xs-12">
					<input placeholder="Person(s)" type="text" id="persons" name="persons">
				</div>
            </div>  

             <div class="col-xs-12">
                <p class="book-btn"><button type="submit" value="Submit Search">Submit Search</button></p>
            </div>
        </form>
</div>  
          </div>
    </div>
  </div>
</div>




    <script>
        jQuery('#from-modal').datetimepicker({
            timepicker:false,
            format: 'd/m/Y'
        });
        jQuery('#to-modal').datetimepicker({
            timepicker:false,
            format: 'd/m/Y'
        });
    </script>

    <script>

      $(document).ready(function() {
        // Basic usage
        $(".placepicker-modal").placepicker();
      }); // END document.ready

    </script>

</head>
<body>

