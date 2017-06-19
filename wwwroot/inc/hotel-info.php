<div class="container">
    <div class="row hotel-item no-border">
        <div class="col-xs-12 col-sm-8">
            <p class="title hotel"><?php echo $row['hotelname']; ?><?php
			$star = $row['star_rating'];
			for ($i = 0; $i < $star; $i++) {
		?>
			<i class="fa fa-star"></i>
		<?php
			}
		?></p>
            <p class="location"><i class="flaticon-map5"></i><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['postcode']; ?>, <?php echo $row['country']; ?> <?php echo $row['contact']; ?></p>
        </div>
        
        <div class="col-xs-12 col-sm-4">
                <?php if(isset($_SESSION['user'])) : ?>
        			<form name="trips-<?php echo $row['id']; ?>" class="addtoTrips hotel add<?php echo $row['id']; ?>"><input type="hidden" value="<?php echo $row['id']; ?>" name="hotel"><input type="hidden" value="<?php echo $_SESSION['user']; ?>" name="user">
					<span class="load"><i class="fa fa-spinner fa-spin"></i></span><span class="add"><i class="fa fa-check"></i></span><input class="submit-trips" type="submit" value="Add Hotel to my Trips"></form>
				<?php else : ?>
					<p style="font-size:12px;" class="trips">Login to Add Hotel to my Trips</p>
				<?php endif; ?>

        </div>
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
				$('.add<?php echo $row['id']; ?>').toggleClass("added"); //you can list several class names 
            }
          });

        });

      });
    </script>