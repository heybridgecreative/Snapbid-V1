<?php include 'inc/yoursearch.php'; ?>

<h2 class="filters orange">Filter Search</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 
<div id="accordion" class="col-xs-12 filter filters">

    <div class="filter-item">
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
        <div class="accordion-content">
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

    <div class="filter-item">
        <h4 class="accordion-toggle">Room Type</h4>
        <div class="accordion-content">
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
        <div class="accordion-content">
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


    
    <div class="filter-item">
        <h4 class="accordion-toggle">Hotel Facilities</h4>
        <div class="accordion-content">
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
        <div class="accordion-content">
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


    <!--
    <div class="filter-item">
        <h4 class="accordion-toggle">Hotel Theme</h4>
        <div class="accordion-content">
            <ul>
                <li class="checkbox"><input type="checkbox" id="wifi" value="wifi"><label for="wifi"></label>Wi-Fi</li>
                <li class="checkbox"><input type="checkbox" value="parking" id="parking"><label for="parking"></label>Parking</li>
                <li class="checkbox"><input type="checkbox" value="airport-shuttle" id="airport-shuttle"><label for="airport-shuttle"></label>Airport Shuttle</li>
                <li class="checkbox"><input type="checkbox" value="fitness-center" id="fitness-center"><label for="fitness-center"></label>Fitness Center</li>
                <li class="checkbox"><input type="checkbox" value="pet-friendly" id="pet-friendly"><label for="pet-friendly"></label>Pet Friendly</li>
                <li class="checkbox"><input type="checkbox" value="restaurant" id="restaurant"><label for="restaurant"></label>Restaurant</li>
            </ul>
        </div>
        
    </div>
    
    <div class="filter-item">
        <h4 class="accordion-toggle">District</h4>
        <div class="accordion-content">
            <ul>
                <li class="checkbox"><input type="checkbox" id="wifi" value="wifi"><label for="wifi"></label>Wi-Fi</li>
                <li class="checkbox"><input type="checkbox" value="parking" id="parking"><label for="parking"></label>Parking</li>
                <li class="checkbox"><input type="checkbox" value="airport-shuttle" id="airport-shuttle"><label for="airport-shuttle"></label>Airport Shuttle</li>
                <li class="checkbox"><input type="checkbox" value="fitness-center" id="fitness-center"><label for="fitness-center"></label>Fitness Center</li>
                <li class="checkbox"><input type="checkbox" value="pet-friendly" id="pet-friendly"><label for="pet-friendly"></label>Pet Friendly</li>
                <li class="checkbox"><input type="checkbox" value="restaurant" id="restaurant"><label for="restaurant"></label>Restaurant</li>
            </ul>
        </div>
        
    </div>
    
    <div class="filter-item">
        <h4 class="accordion-toggle">Meals</h4>
        <div class="accordion-content">
            <ul>
                <li class="checkbox"><input type="checkbox" id="wifi" value="wifi"><label for="wifi"></label>Wi-Fi</li>
                <li class="checkbox"><input type="checkbox" value="parking" id="parking"><label for="parking"></label>Parking</li>
                <li class="checkbox"><input type="checkbox" value="airport-shuttle" id="airport-shuttle"><label for="airport-shuttle"></label>Airport Shuttle</li>
                <li class="checkbox"><input type="checkbox" value="fitness-center" id="fitness-center"><label for="fitness-center"></label>Fitness Center</li>
                <li class="checkbox"><input type="checkbox" value="pet-friendly" id="pet-friendly"><label for="pet-friendly"></label>Pet Friendly</li>
                <li class="checkbox"><input type="checkbox" value="restaurant" id="restaurant"><label for="restaurant"></label>Restaurant</li>
            </ul>
        </div>
        
    </div>
    
    <div class="filter-item">
        <h4 class="accordion-toggle">Chain</h4>
        <div class="accordion-content">
            <ul>
                <li class="checkbox"><input type="checkbox" id="wifi" value="wifi"><label for="wifi"></label>Wi-Fi</li>
                <li class="checkbox"><input type="checkbox" value="parking" id="parking"><label for="parking"></label>Parking</li>
                <li class="checkbox"><input type="checkbox" value="airport-shuttle" id="airport-shuttle"><label for="airport-shuttle"></label>Airport Shuttle</li>
                <li class="checkbox"><input type="checkbox" value="fitness-center" id="fitness-center"><label for="fitness-center"></label>Fitness Center</li>
                <li class="checkbox"><input type="checkbox" value="pet-friendly" id="pet-friendly"><label for="pet-friendly"></label>Pet Friendly</li>
                <li class="checkbox"><input type="checkbox" value="restaurant" id="restaurant"><label for="restaurant"></label>Restaurant</li>
            </ul>
        </div>
        
    </div> -->


    

    
    <div class="filter-item map">
		<div class="mapBox">
			<div class="mapBoxClick"></div>
        	<div id="map_canvas" style="height:150px; width:100%;"></div>
		</div>
        <h4>Map View</h4>
        <p>Click to the map show results in map view</p>
        
    </div>
        
</div>




