<?php
    if(($_GET['bid'] > "74") && ($_GET['bid'] < "79")) {
        echo "<canvas id='none'></canvas>";
    } elseif ($_GET['bid'] < "75") {
        echo "<canvas id='none'></canvas>";
    } else {
        echo "<canvas id='world'></canvas>";
    }
?>
<?php
    $bidprice = $_GET['bid'];
    $normalprice = $bidprice + 12;
?>


<div class="previousprice">
    <P style="text-align:center">Lowest Price on Comparison Websites: <strong>£<?php echo $normalprice; ?></strong><br />Your Bid is: <strong>£<?php echo $bidprice; ?></strong></P>
</div>
<div id="card-drop" class="wrap">
    
		<div style="left:43% !important;" class="md-modal md-effect-5 <?php 
if(($_GET['bid'] > "74") && ($_GET['bid'] < "79")) {
    echo "hvr-buzz";
} else {
    echo "";
}
?>" id="modal-5">
			<div class="md-content " style="text-align:center; height:375px; width:232px; background-color:#ef4036; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1);
-moz-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1);
box-shadow: 0px 0px 0px 12px rgba(239,64,54,1);">
				<div style="padding:15px;">
					<h1 style="line-height:265px;color:white;
                    <?php if (($_GET['bid'] > 99) && ($_GET['bid'] < 999)) {
                        echo "font-size:73px;";
                    } elseif ($_GET['bid'] < 100) {
                        echo "font-size:99px;";
                    } elseif (($_GET['bid'] > 999) && ($_GET['bid'] < 9999)) {
                        echo "font-size:59px;";
                    } elseif ($_GET['bid'] > 9999) {
                        echo "font-size:50px;";
                    } else {
                        echo "font-size:80px;";
                    }
                    ?>
                               ">£<?php echo $_GET['bid']; ?></h1>
				</div>
			</div>
		</div>
        
    
    
		<div style="left:58% !important;" class="md-modal md-effect-6" id="modal-6">
			<div class="md-content" style="text-align:center; height:375px; width:232px; background-color:#9f1f63 !important; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px #9f1f63;
-moz-box-shadow: 0px 0px 0px 12px #9f1f63;
box-shadow: 0px 0px 0px 12px #9f1f63;">
				<div style="padding:15px;">
                    <?php 
                        if(($_GET['bid'] > "74") && ($_GET['bid'] < "79")) {
                            echo "<p  style='line-height:96px;font-size:50px;'>sorry try again</p>";
                        } elseif ($_GET['bid'] < "75") {
                            echo "<p style='line-height:96px;font-size:50px;'>sorry try again</p>";
                        } else {
                            echo "<h1 style='color:white;line-height:265px;";
                            if (($_GET['bid'] > 99) && ($_GET['bid'] < 999)) {
                                echo "font-size:73px;";
                            } elseif ($_GET['bid'] < 100) {
                                echo "font-size:99px;";
                            } elseif (($_GET['bid'] > 999) && ($_GET['bid'] < 9999)) {
                                echo "font-size:59px;";
                            } elseif ($_GET['bid'] > 9999) {
                                echo "font-size:50px;";
                            } else {
                                echo "font-size:80px;";
                            }
                            echo "'>£".$_GET['bid']."</h1>";
                        }
                    ?>
				</div>
			</div>
		</div>
    
</div>

		
<div class="container bid-text">
    <div id="outcome">
    
     <?php 
                        if(($_GET['bid'] > "74") && ($_GET['bid'] < "79")) {
                            echo "<h2 style='text-align:center;line-height:96px;'>so close</h2><p>You're so close, try again!</p>";
                        } elseif ($_GET['bid'] < "75") {
                            echo "<h2 style='text-align:center;line-height:96px;'>bid again</h2><p>Sorry try again!</p>";
                        } else {
                            echo "<h2 style='text-align:center;line-height:200%;font-size:80px;'>snap!</h2><p style='text-align:center;font-size:28px;line-height:34px;'>Congratulations, you've won the bid!<br />You saved <strong>£12</strong> on this booking!</p><p style='width:100%;text-align:center;'><span class='hvr-pulse'>Why not spend your savings on a <strong><u>room upgrade!</u></strong></span></p>";
                        }
                    ?> 
        
        </div> 
    
    <div id="button">
    
        <a href="#" <?php 
            if(($_GET['bid'] > "74") && ($_GET['bid'] < "79")) {
                echo "data-toggle='modal' data-target='#basicModal'";
            } elseif ($_GET['bid'] < "75") {
                echo "data-toggle='modal' data-target='#basicModal'";
            } else {
                echo "#";
            }
        ?> 
           >
                 
                 <p class="btn" style="padding:20px 40px; border-radius:5px; color:white; background-color:#ef4036; width:auto; text-align:center;display: inline;">
        
        <?php 
            if(($_GET['bid'] > "74") && ($_GET['bid'] < "79")) {
                echo "Bid Again";
            } elseif ($_GET['bid'] < "75") {
                echo "Bid Again";
            } else {
                echo "Book Now";
            }
        ?> 
        
        </p></a>
        
    </div>
    </div>
    
		<div class="md-overlay"></div><!-- the overlay element -->



        <script src="js/confetti.js"></script>
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
