

<h2 class="filters orange">Filter Search</h2>
<div class="mobile-filters">
<div class="col-xs-12">

<h2 class="filters orange">Filter Search</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 
<div id="accordion" class="col-xs-12 filter filters">

    <div class="filter-item" style="height: 187px;">
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="bid-only">
				<ul style="margin-top:10px;">
                	<li class="checkbox"><p class="filter-btn" data-filter=".Bid">Live Bid Only</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
				</ul>
    		</div>
        </div>
        
    </div>	

	<div class="filter-item">
        <h4 class="accordion-toggle">Price (per night)</h4>
        <div class="accordion-content default">
            <div class="filter-group">
			<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?><?php if($_GET['sort']) :?>&sort=<?php echo $_GET['sort']; ?><?php endif; ?>">
			<ul class="priceFilter">
            	<li <?php if($_GET['price'] == "10-50") { echo "class='selected'"; } ?>><label for="1">&pound;10 - &pound;50</label><input type="radio" name="price" id="1" value="10-50"></li>
            	<li <?php if($_GET['price'] == "51-150") { echo "class='selected'"; } ?>><label for="2">&pound;51 - &pound;150</label><input type="radio" name="price" id="2" value="51-150"></li>
            	<li <?php if($_GET['price'] == "151-300") { echo "class='selected'"; } ?>><label for="3">&pound;151 - &pound;300</label><input type="radio" name="price" id="3" value="151-300"></li>
            	<li <?php if($_GET['price'] == "301-450") { echo "class='selected'"; } ?>><label for="4">&pound;301 - &pound;450</label><input type="radio" name="price" id="4" value="301-450"></li>
            	<li <?php if($_GET['price'] == "451-1000") { echo "class='selected'"; } ?>><label for="5">&pound;451 +</label><input type="radio" name="price" id="5" value="451-1000"></li>
			</ul>
			</form>
			</div>
        </div>
    </div>

<div style="clear:both;"></div>

	 <div class="filter-item">
        <h4 class="accordion-toggle">Star Rating</h4>
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="star">
				<ul>
      				<li class="checkbox"><p class="filter-btn is-checked" data-filter="">All</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".star1"><i class="fa fa-star"></i></p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".star2"><i class="fa fa-star"></i><i class="fa fa-star"></i></p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".star3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".star4"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".star5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p></li>
				</ul>
<p></p>
    		</div>
        </div>
        
    </div>

    <div class="filter-item">
        <h4 class="accordion-toggle">Accommodation Type</h4>
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="accommodation-type">
				<ul>
      				<li class="checkbox"><p class="filter-btn is-checked" data-filter="">Hotel</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Apartment">Apartment</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Bed-and-Breakfast">Bed and Breakfast</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Holiday-Home">Holiday Home</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Guest-House">Guest House</p></li>
				</ul>
<p></p>
    		</div>
        </div>
        
    </div>

<div style="clear:both;"></div>

    <div class="filter-item">
        <h4 class="accordion-toggle">Room Type</h4>
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="room-type">
				<ul>
      				<li class="checkbox"><p class="filter-btn is-checked" data-filter="">All</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Single-bed">Single</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Double-bed">Double</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Twin-bed">Twin</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Family">Family</p></li>
				</ul>
<p></p>
    		</div>
        </div>
        
    </div>


    
    <div class="filter-item">
        <h4 class="accordion-toggle">Room Facilities</h4>
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="internet">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Internet-Access">Wi-Fi</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="safe">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Safe">Safe</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="ensuite">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Ensuite">En-Suite</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="mini">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Minibar">Mini Bar</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="hairdryer">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Hairdryer">Hairdryer</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<ul>
                <li class="checkbox" style="color:#ef4036">+ More</li>
            </ul>
			<p></p>
        </div>
    </div>

<div style="clear:both;"></div>
    
    <div class="filter-item">
        <h4 class="accordion-toggle">Hotel Facilities</h4>
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="internet">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Internet-Access">Wi-Fi</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="parking">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Parking">Parking</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="aiport-shuttle">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Airport-Shuttle">Airport Shuttle</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="fitness-center">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Fitness-Center">Fitness Center</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="pet-friendly">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Pet-Friendly">Pet Friendly</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<div class="filter-group" data-filter-group="restaurant">
            <ul>
                <li class="checkbox"><p class="filter-btn" data-filter=".Restaurant">Restaurant</p><p class="filter-btn rm_filter" data-filter=""><i class="fa fa-close"></i></p></li>
			</ul>
        	</div>
			<ul>
                <li class="checkbox" style="color:#ef4036">+ More</li>
			</ul>
            <p></p>
        </div>
    </div>
    
   


   
    <div class="filter-item">
        <h4 class="accordion-toggle">Review Score</h4>
        <div class="accordion-content default">
            <div class="filter-group" data-filter-group="rating">
				<ul>
      				<li class="checkbox"><p class="filter-btn is-checked" data-filter="">All</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".no-rating">No Rating</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Pleasant">Pleasant 6+</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Good">Good 7+</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Very Good">Very Good 8+</p></li>
      				<li class="checkbox"><p class="filter-btn" data-filter=".Excellent">Excellent 9+</p></li>
				</ul>
<p></p>
    		</div>
        </div>
        
    </div>


<div style="clear:both;"></div>    
    
    
</div>
</form>



</div>
</div>




<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none;}
  .accordion-content.default {display: block;}
</style>

   