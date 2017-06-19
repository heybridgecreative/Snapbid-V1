<div id="header" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
	   <div class="row dropdown-nav">
		 <div class="navbar-header col-xs-12 col-sm-4">
          
			<div class="icon non mobile">
				<div class="iconIMG">
					<img style="margin:18px 0px;" src="img/logo-icon.png" height="26px">
				</div>
				<div class="text">
					<img src="img/logo-text.png">
				</div>
			</div>

          <button type="button" class="navbar-toggle collapsed mobile" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
				<img style="margin:9px 10px;" src="img/logo-icon-menu.png" height="26px">
          </button>

						<li class="account mobile">
							<p class="navbar-toggle account-toggle actbtn login collapsed mobile-right">
								<a class="non mobile" href="user.php">Account</a>
								<a class="mobile"  href="#loginReminder" role="button" data-toggle="modal" ><img src="img/user-icon.png" height="26px"></a>
					 		</p>
						</li>

        </div>


           

            <div class="col-xs-12 col-sm-8 navbar-collapse collapse" id="navbar" aria-expanded="false" style="height: 1px;">
                <ul class="dropdown-nav-nav" style="display:block;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="results.php">Browse All</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><p class="navbar-toggle actbtn add collapsed mobile-right"><a href="add.php">Add your Property</a></a></li>
					
					<?php if(isset($_SESSION['user'])) : ?>
						<li class="account non mobile" style="display:inline-block;">
						
						<p class="navbar-toggle account-toggle actbtn login collapsed mobile-right" style="float:none !important">
							<a href="#loginReminder" role="button" data-toggle="modal" class="non mobile">Account</a>
					 	</p>
						</li>

				     <?php else : ?>
						<li class="account">
					 	<p class="navbar-toggle actbtn login collapsed mobile-right">
							<a href="#loginReminder" role="button" data-toggle="modal" class="non mobile">Login</a>
							<a class="mobile"  href="#loginReminder" role="button" data-toggle="modal" ><i style="font-size:26px" class="fa fa-sign-in"></i></a>
					 	</p>
						</li>
						<li class="account">
						<p class="navbar-toggle actbtn signup collapsed mobile-right">
							<a class="non mobile" href="register.php">Signup</a>
							<a class="mobile"  href="#loginReminder" role="button" data-toggle="modal" ><i style="font-size:26px" class="fa fa-sign-in"></i></a>
					 	</p>
						</li>
                     <?php endif; ?>
				 	</li>

                </ul>
            </div>
			

            
        </div>
    </div>   
             <ul class="dropdown-account" id="account">
						<div class="row">
							<div class="account col-xs-12 col-sm-6">
								<h3 style="text-align:left;"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['surname'] ?></h3>
							</div>
                            <li class="col-xs-3 col-sm-1"><a href="account.php?profile"><i class="fa-user fa"></i><br />Profile</a></li>
                            <li class="col-xs-3 col-sm-1"><a href="account.php?trips"><i class="fa-globe fa"></i><br />My Trips</a></li>
                            <li class="col-xs-3 col-sm-1"><a href="account.php?bids"><i class="fa-gavel fa"></i><br />Bids</a></li>
                            <li class="col-xs-3 col-sm-1"><a href="account.php?bookings"><i class="fa-key fa"></i><br />Bookings</a></li>
                            <li class="col-xs-3 col-sm-1"><a href="account.php?lotto"><i class="fa-star-o fa"></i><br />Lotto</a></li>
                            <li class="col-xs-12 col-sm-1"><a href="logout.php?logout"><i class="fa-sign-out fa"></i><br />Sign Out</a></li>
                                                  
						</div>  
			</ul>                  
</div>

