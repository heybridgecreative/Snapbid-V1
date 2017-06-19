<?php foreach($rows as $row) : ?> 
   <div class="col-xs-12 hotel-item">

    <div class="col-xs-4 hotel-image">
        <div class="inner">
            <img src="<?php echo $row['main_image']; ?>">
        </div>
    </div>

    <div class="col-xs-8 col-sm-5 mo hotel-item-info">
        <p class="title" style="line-height:32px;"><?php echo $row['hotelname']; ?></p>
        <p class="location"><i class="flaticon-map5"></i><?php echo $row['city']; ?>, <?php echo $row['country']; ?></p>
        <?php
			$star = $row['star_rating'];
			for ($i = 0; $i < $star; $i++) {
		?>
			<i class="fa fa-star"></i>
		<?php
			}
		?>
        <p class="latest-bid ">Latest Bid: <?php echo rand(2,59); ?> Minutes ago</p>
    
	<div class="no-mo">			            
		<?php if(isset($row['reserve_price'])) : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="bidav col-xs-3"><span class="bid-btn">Bid</span></p></a>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-xs-9">Book<span class="price"> From £<?php echo $row['price']; ?></span></p></a>
		<?php else : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-xs-12">Book<span class="price"> From £<?php echo $row['price']; ?></span></p></a>
		<?php endif; ?>

         <p class="more-info-btn col-xs-12"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>">More Info</a></p>
    </div>

	<div class="mo buttons">
         <?php if(isset($row['reserve_price'])) : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="bidav col-xs-3"><span class="bid-btn">Bid</span></p></a>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-xs-9">Book<span class="price">£<?php echo $row['price']; ?></span></p></a>
		<?php else : ?>
			<a href="hotel.php?hotel_id=<?php echo $row['id']; ?>"><p class="book-btn col-xs-12">Book<span class="price">£<?php echo $row['price']; ?></span></p></a>		
		<?php endif; ?>
	</div>
        
    </div>

    <div class="col-xs-3 no-mo">
        <p class="reviews">Excellent</p>
        <p class="review-count"><?php echo rand(600,2000); ?> Reviews</p>
			<?php if(isset($_SESSION['user'])) : ?>
        		<p class="trips"><form name="trips-<?php echo $row['id']; ?>" class="addtoTrips add<?php echo $row['id']; ?>"><input type="hidden" value="<?php echo $row['id']; ?>" name="hotel"><input type="hidden" value="<?php echo $_SESSION['user']; ?>" name="user">
				<span class="load"></span><span class="add"></span><input class="submit-trips" type="submit" value="Remove from my Trips"></form></p>
		<?php else : ?>
			<p class="trips"><a data-toggle="tooltip" title="Login to add to trips!" data-placement="top" href="#" data-toggle="modal" data-target="#basicModal">Add Hotel to my Trips</a></p>
		<?php endif; ?>
        		<p class="more-info-btn"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>">More Info</a></p>
    </div>
    
    <div class="mo buttons">
            <p class="more-info-btn col-xs-4"><a href="hotel.php?hotel_id=<?php echo $row['id']; ?>">More Info</a></p>
        </div>

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
				$(".add<?php echo $row['id']; ?>").closest(".hotel-item").toggleClass("remove");
            }
          });

        });

      });
    </script>
<?php endforeach ?>

