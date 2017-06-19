<h2 class="filters orange">Filter Search</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 
<div id="accordion" class="col-xs-12 filter">
    <div class="filter-item">
        <h4 class="accordion-toggle">Price (per night)</h4>
        <div class="accordion-content default">
            <p class="filter-desc">Price Range</p>
            <input id="slider" name="price" type="text" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[10,1000]"/>
        </div>
    </div>

	 <div class="filter-item">
        <h4 class="accordion-toggle">Star Rating</h4>
        <div class="accordion-content default">
            <ul>
                <li class="checkbox"><input name="rating" type="checkbox" id="1star" value="1"><label for="1star"></label>1 Star</li>
                <li class="checkbox"><input name="rating" type="checkbox" value="2" id="2star"><label for="2star"></label>2 Star</li>
                <li class="checkbox"><input name="rating" type="checkbox" value="3" id="3star"><label for="3star"></label>3 Star</li>
                <li class="checkbox"><input name="rating" type="checkbox" value="4" id="4star"><label for="4star"></label>4 Star</li>
                <li class="checkbox"><input name="rating" type="checkbox" value="5" id="5star"><label for="5star"></label>5 Star</li>
            </ul>
        </div>
        
    </div>

    <div class="filter-item">
        <h4 class="accordion-toggle">Review Score</h4>
        <div class="accordion-content">
            <ul>
                <li class="checkbox"><input type="checkbox" id="no" value="no"><label for="no"></label>No Rating</li>
                <li class="checkbox"><input type="checkbox" value="6" id="6"><label for="6"></label>Pleasant 6+</li>
                <li class="checkbox"><input type="checkbox" value="7" id="7"><label for="7"></label>Good 7+</li>
                <li class="checkbox"><input type="checkbox" value="8" id="8"><label for="8"></label>Very Good 8+</li>
                <li class="checkbox"><input type="checkbox" value="9" id="9"><label for="9"></label>Excellent 9+</li>
            </ul>
        </div>
        
    </div>

    
    <div class="filter-item">
        <h4 class="accordion-toggle">Hotel Facilities</h4>
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
        <h4 class="accordion-toggle">Room Facilities</h4>
        <div class="accordion-content">
            <ul>
                <li class="checkbox"><input type="checkbox" id="wifi" value="wifi"><label for="wifi"></label>Wi-Fi</li>
                <li class="checkbox"><input type="checkbox" value="safe" id="safe"><label for="safe"></label>Safe</li>
                <li class="checkbox"><input type="checkbox" value="ensuite" id="ensuite"><label for="ensuite"></label>En-Suite</li>
                <li class="checkbox"><input type="checkbox" value="minibar" id="minibar"><label for="minibar"></label>Mini Bar</li>
                <li class="checkbox"><input type="checkbox" value="hairdryer" id="hairdryer"><label for="hairdryer"></label>Hairdryer</li>
                <li style="text-align:center; color:#ef4036">+ More</li>
            </ul>
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
    
    <div class="filter-item">
        
        <h4>Distance from Nearest Station</h4>
        <input id="slider2" type="text" value="" data-slider-min="0" data-slider-max="400" data-slider-step="5" data-slider-value="10"/>
        
    </div>
    
    <div class="filter-item">
        
        <h4>Map View</h4>
        <p>Click to show map view</p>
        
    </div>
    
    <div class="filter-item">
        <input class="bid-btn" type="submit">
        
        <p class="book-btn">
            Clear Filters
        </p>
    </div>
    
</div>
</form>



<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none;}
  .accordion-content.default {display: block;}
</style>
<script src="js/bootstrap-slider.js" type="text/javascript"></script>
<script>
    $("#slider").slider({});
    $('#slider2').slider({
	   formatter: function(value) {
	       return 'Current value: ' + value;
	   }
    });
</script>
<script type="text/javascript">
  $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){
      //Expand or collapse this panel
      $(this).next().slideToggle('fast');
    });
  });
</script>    