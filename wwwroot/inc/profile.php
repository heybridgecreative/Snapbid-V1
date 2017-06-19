<div class="container">
    <div class="row account">
		<div class="col-xs-12">
        	<h1>Hello <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['surname']; ?>, it's nice to see you!</h1>
		</div>
    </div>
    
    <div class="profile row">
        <div class="col-xs-12 col-sm-6 buttns profile">
			<h3>Profile:</h3>
		<div class="col-xs-12">
            <a href="#"><p><strong>Name</strong><br /><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['surname']; ?></p></a>
		</div>
		<div class="col-xs-12">
            <a href="#"><p><strong>Username</strong><br /><?php echo $_SESSION['username']; ?></p></a>
		</div>
		<div class="col-xs-12">
            <a href="#"><p><strong>Email</strong><br /><?php echo $_SESSION['email']; ?></p></a>
		</div>
		<div class="col-xs-12">	
			<a href="#"><p><strong>How many bids</strong><br /><?php
				$query = mysql_query("SELECT * FROM snapbid_bids WHERE bid_user_name='".$_SESSION['username']."'");
				$number = mysql_num_rows($query); 
				echo $number;
			?> </p></a>
		</div>
       </div>

		<div class="col-xs-12 col-sm-6 buttns">
<h3>Quick Links:</h3>
				<div class="col-xs-12">
					<a href="account.php?manage"><p><i class="fa-cog fa"></i><br />
					Manage Profile</p></a>
				</div>
				<div class="col-xs-12">
					<a href="account.php?trips"><p><i class="fa-globe fa"></i><br />
					My Trips</p></a>
				</div>
			

				<div class="col-xs-12">
					<a href="account.php?bids"><p><i class="fa-gavel fa"></i><br />
					Bids</p></a>
				</div>
				<div class="col-xs-12">
					<a href="logout.php?logout"><p><i class="fa-sign-out fa"></i><br />
					Sign Out</p></a>
				</div>

				<div class="col-xs-12">
					<a href="index.php"><p><i class="fa-building fa"></i><br />
					Search for Hotels</p></a>
				</div>

        </div>

    </div>
</div>