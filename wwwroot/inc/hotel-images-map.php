<div class="container images-map">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-6 main-image">
                <a class="fancybox-effects-d fancybox" rel="savoy" href="<?php echo $row['main_image']; ?>" title="<?php echo $row['hotelname']; ?>">
                    <img src="<?php echo $row['main_image']; ?>" alt="" />
                </a>
        </div>
<?php
$imagestr = $row['images'];
$images = explode(',',$imagestr);
?>

<div class="col-xs-12 col-sm-6 col-lg-3 sm-images">
		<div class="main-image-images">
			<a class="fancybox-effects-d fancybox" rel="savoy" href="<?php echo $row['main_image']; ?>" title="<?php echo $row['hotelname']; ?>">
                    <img src="<?php echo $row['main_image']; ?>" alt="" />
                </a>
		</div>
	<?php $i = 0; foreach($images as $value) : ?>
		<?php $i++; ?>
  			<div>
                <a class="fancybox-effects-d fancybox" rel="savoy" href="<?php print $value; ?>" title="<?php echo $row['hotelname']; ?>">
                    <img src="<?php print $value; ?>" alt="" />
                </a>
            </div>
	<?php if($i==11) break; endforeach; ?>    			
			
</div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 ratingmap">
            <p class="review title">Excellent!</p>
            <p class="review-count"><?php echo rand(600, 2000); ?> Reviews</p>
            <p class="review-rating"><?php echo rand(1, 5); ?> out of 5</p>
            <div class="map">
				<div class="map-btn">
					<a href="#">Toggle Map</a>
				</div>
				<iframe width="100%" height="183" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src='https://maps.google.com/maps?q=<?php echo urlencode($row['hotelname']); echo ",+"; echo urlencode($row['city']); echo ",+"; echo urlencode($row['postcode']); echo ",+"; echo urlencode($row['country']); ?>&output=embed'></iframe>
            </div>
            <img src="img/traveladvisor.png">
        </div>
    </div>
</div>