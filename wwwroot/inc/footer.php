<div class="container footer">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <h3>SnapBid</h3>
            <div class="col-xs-6 col-sm-4">
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="customer-service.php?help">How SnapBid works?</a></li>
                <li><a href="customer-service.php?joining">Joining SnapBid</a></li>
                <li><a href="customer-service.php?faqs">FAQs</a></li>
                <li><a href="customer-service.php?terms">Terms &amp; Conditions</a></li>
                <li><a href="customer-service.php?privacy">Privacy</a></li>
                <li><a href="customer-service.php?recruit">Recruitment</a></li>
            </ul>
            </div>
            <div class="col-xs-6 col-sm-6">
            <ul>
                <li><a href="admin">Hotel Login</a></li>
                <li><a href="user.php">Customer Login</a></li>
                <li>&nbsp;</li>
                <li>Apply to add a property to SnapBid</li>
                <li><a href="add.php">Click Here</a></li>
            </ul>
            </div>
            <div class="col-xs-12 col-sm-2">
            <!--Blank-->
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-xs-12">
            
            <div class="col-xs-12 col-sm-3">
                <!--Blank-->
            </div>
            <div class="col-xs-8">
                <h3>SnapBid on the go!</h3>
            </div>
            
            
            <div class="col-xs-3">
                <!--Blank-->
            </div>
            
            <div class="col-xs-5">
                <ul class="tick">
                    <li>bid on the go</li>
                    <li>anytime, anywhere</li>
                    <li>book last minute</li>
                    <li>manage your bookings</li>
                </ul>
            </div>
            
            <div class="col-xs-4">
                <img style="width:100%; height:auto;" src="img/app-preview.png">
            </div>
            
            
            
        </div>
    </div>
</div>

<div class="container copyright">
    <div class="row">
        <div class="col-xs-6">
            <p>&copy; snapbid</p>
        </div>
        <div class="col-xs-6 text-right social">
            <i class="fa fa-facebook"> </i> <i class="fa fa-twitter"> </i> <i class="fa fa-google-plus"> </i>
        </div>
    </div>
</div>

<script>
$('#search').modal();
</script>

<script>
$('#basicModal').modal();
</script>


<?php 
if(!isset($_SESSION['username'])) {
	include 'inc/loginReminder.php';
}
?>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

    <script src="js/jquery.fancybox.js"></script>

<script> 
$(document).ready(function() {
	$(".fancybox").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
}); 
</script>

<script>
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});
</script>


<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none;}
  .accordion-content.default {display: block;}
</style>
<script src="js/bootstrap-slider.js" type="text/javascript"></script>

<script>
$('input[type=radio]').on('change', function() {
    $(this).closest("form").submit();
});
</script>
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

<script src='js/jquery.isotope.js'></script>

<script>
// external js: isotope.pkgd.js

$(document).ready( function() {



  // init Isotope
  var $grid = $('.hotels').isotope({
    itemSelector: '.hotel-item'
	
  });
  
  // store filter for each group
  var filters = {};

  $('.filters').on( 'click', '.filter-btn', function() {
    var $this = $(this);
    // get group key
    var $inputGroup = $this.parents('.filter-group');
    var filterGroup = $inputGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $this.attr('data-filter');
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.filter-group').each( function( i, filterGroup ) {
    var $filterGroup = $( filterGroup );
    $filterGroup.on( 'click', '.filter-btn', function() {
      $filterGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  
});

  // filter functions
  var filterFns = {
    greaterThan200: function() {
      return parseInt($('.hotel-item').attr('price'), 10) > 200;
    },
    greaterThan300: function() {
      return parseInt($('.hotel-item').attr('price'), 10) >300;
    }
  };

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}
</script>
    

<script>    
    $('.switch').on('click', function(e) {
      $('.list-hidden').toggleClass("not-hidden"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.show-more').on('click', function(e) {
      $(this).toggleClass("minus plus"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.map-btn').on('click', function(e) {
      $('.map').toggleClass("drop"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.features-btn').on('click', function(e) {
      $('.hotel-features').toggleClass("drop"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.more-btn').on('click', function(e) {
      $('.more-info').toggleClass("drop"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.more').on('click', function(e) {
      $(this).closest('.roomContent').find(".features").toggleClass("show"); 
      $(this).closest('.room').find(".roomImage").toggleClass("show"); 
      $(this).closest('.room').find(".roomInfo").toggleClass("clicked"); 
	  $(this).closest('.room').find(".more--info").toggle();
	  $(this).closest('.room').find(".less--info").toggle();

      e.preventDefault();
    });
</script>

<script>    
    $('.mobile-filter-btn').on('click', function(e) {
      $('.refine').toggleClass("drop"); 
      $('.close-filter').toggleClass("up"); 
	  $(this).toggle();
	  $('.close-filter-btn').toggle();
      e.preventDefault();	
		return false;
    });
</script>

<script>    
    $('.close-filter-btn').on('click', function(e) {
      $('.refine').toggleClass("drop"); 
      $('.close-filter').toggleClass("up"); 
	  $('.mobile-filter-btn').toggle();
	  $('.close-filter-btn').toggle();
      e.preventDefault();	
		return false;
    });
</script>

<script>    
    $('.room-btn').on('click', function(e) {
      $('.room-info').toggleClass("drop"); 
      e.preventDefault();
    });
</script>

<?php if(isset($_SESSION['user'])) : ?>
<script>    
    $('.account-toggle').on('click', function(e) {
      $('.dropdown-account').toggleClass("drop"); 
      e.preventDefault();
    });
</script>
<?php endif; ?>

<script>    
    $('.search-btn').on('click', function(e) {
      $('.search-bar').toggleClass("drop"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.how-btn').on('click', function(e) {
      $('.off-canvas').toggleClass("drop"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.how-btn').on('click', function(e) {
      $('.navbar-fixed-top').toggleClass("static"); 
      e.preventDefault();
    });
</script>

<script>    
    $('.clearsearchbtn').on('click', function(e) {
      $('.yoursearch').toggleClass("edit"); 
      e.preventDefault();
    });
</script>


<script>
$(function() {
    var icon = $(".iconIMG");
    var text = $(".icon .text");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 280) {
            icon.addClass("animated bounceInDown");
			text.addClass("animated fadeInLeft");
        } 
    });
});
</script>

    <script>

      $(document).ready(function() {
        // Basic usage
        $(".placepicker").placepicker();
      }); // END document.ready

    </script>

<!--
<pre>
<?php
	print_r($_SESSION);
?>
</pre>
-->
</body>
</html>
