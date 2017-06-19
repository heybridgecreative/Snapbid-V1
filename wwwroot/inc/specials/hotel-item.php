<?php foreach($rows as $row) : ?> 
   <div class="special col-xs-12 hotel-item star<?php echo $row['star_rating']; ?> <?php $facilities = str_replace(" ", "-", $row['features']);  echo str_replace(",-", " ", $facilities); ?> <?php if(isset($row['reserve_price'])) : ?>Bid<?php endif; ?>">

    <div class="col-xs-4 hotel-image">
        <div class="inner">
            <a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><img src="<?php echo $row['main_image']; ?>" alt="<?php echo $row['hotelname']; ?>"></a>
			<p><?php echo $row['special_description']; ?></p>
        </div>
    </div>

    <div class="col-xs-8 col-sm-5 mo hotel-item-info">
        <p class="title" style="line-height:32px;"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><?php echo $row['hotelname']; ?></a></p>
        <p class="location"><i class="flaticon-map5"></i><span class="city"><?php echo $row['city']; ?></span><span class="country">, <?php echo $row['country']; ?></span></p>
        <?php
			$star = $row['star_rating'];
			for ($i = 0; $i < $star; $i++) {
		?>
			<i class="fa fa-star"></i>
		<?php
			}
		?>
        <p class="mo buttons price"><strong>from £<?php echo $row['price']; ?></strong></p>
                <p class="latest-bid ">Latest Bid: <?php echo rand(2,59); ?> Minutes ago</p>

    
	<div class="no-mo">			            
		<?php if(isset($row['reserve_price'])) : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="bidav col-sm-5 col-xs-6"><span class="bid-btn">Live Bid</span></p></a>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-sm-7 col-xs-6">Book</p></a>
		<?php else : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="bidav col-sm-5 col-xs-6"><span class="bid-btn send">Send Bid</span></p></a>	
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-sm-7 col-xs-6">Book</p></a>
		<?php endif; ?>

         <p class="more-info-btn col-xs-12"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>">More Info</a></p>
    </div>

	<div class="mo buttons">
         <?php if(isset($row['reserve_price'])) : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="bidav col-sm-5 col-xs-6"><span class="bid-btn">Live Bid</span></p></a>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-sm-7 col-xs-6">Book</p></a>
		<?php else : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="bidav col-sm-5 col-xs-6"><span class="bid-btn send">Send Bid</span></p></a>	
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-sm-7 col-xs-6">Book</p></a>		
		<?php endif; ?>
	</div>
        
    </div>

    <div class="col-xs-3 no-mo">
        <p class="reviews">Excellent</p>
        <p class="review-count"><?php echo rand(600,2000); ?> Reviews</p>
		<p class="price"><strong>from £<?php echo $row['price']; ?></strong></p>

		<?php if(isset($_SESSION['user'])) : ?>
        		<p class="trips"><form name="trips-<?php echo $row['id']; ?>" class="addtoTrips add<?php echo $row['id']; ?>"><input type="hidden" value="<?php echo $row['id']; ?>" name="hotel"><input type="hidden" value="<?php echo $_SESSION['user']; ?>" name="user">
				<span class="load"></span><span class="add"></span><input class="submit-trips" type="submit" value="Add Hotel to my Trips"></form></p>
		<?php else : ?>
			<p class="trips" style="font-size:12px;">Login to add to my Trips</p>
		<?php endif; ?>
        		<p class="more-info-btn"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>">More Info</a></p>
    </div>
    
    <div class="mo buttons">
            <p class="more-info-btn col-xs-4"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>">More Info</a></p>
        </div>
	<div style="clear:both;"></div>
</div>
	<script>
      $(function () {

        $('.add<?php echo $row['id']; ?>').on('submit', function (e) {
		$(this).toggleClass("adding"); //you can list several class names 

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'inc/addtotrips.php',
            data: $('.add<?php echo $row['id']; ?>').serialize(),
            success: function () {
				$('.add<?php echo $row['id']; ?>').toggleClass("added"); //you can list several class names 
            }
          });

        });

      });
    </script>
<?php endforeach ?>

