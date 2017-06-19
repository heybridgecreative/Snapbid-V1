<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <?php include 'inc/filter.php' ?>
        </div>
        
        <div class="col-xs-12 col-sm-9 col-md-9 hotels">
            <?php include 'inc/hotel-results.php' ?>


        </div>
		<div class="map_view_overlay"></div>
    </div>
</div>

<div class="close-filter">

</div>
        
<div class="refine">
    <p class="title col-xs-6 mobile-filter-btn">Filter Results</p>
	<p class="title col-xs-6 close-filter-btn" style="display:none;">Close Filter</p>
	<p style="background-color:#ef4036;" class="title col-xs-6 map-filter-btn">Map View</p>
	<?php include ('filter-mobile.php'); ?>
</div>