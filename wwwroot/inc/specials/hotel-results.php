<h2 class="col-xs-6">Special Offers</h2>

<div class="sorting col-xs-6">
<div id="dd" class="sort-dropdown" tabindex="1">
	<span>Sort by...</span>
	<ul class="dropdown">
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>"><i class="fa-sort-alpha-asc fa"></i>Hotel Name Ascending</a></li>
		<li><a href="#"><i class="fa-sort-alpha-desc fa"></i>Hotel Name Descending</a></li>
		<li><a href="#"><i class="fa-sort-numeric-asc fa"></i>Lowest Room Price Ascending</a></li>
		<li><a href="#"><i class="fa-sort-numeric-desc fa"></i>Lowest Room Price Descending</a></li>
		<li><a href="#"><i class="fa-sort-amount-asc fa"></i>Star Rating Ascending</a></li>
		<li><a href="#"><i class="fa-sort-amount-desc fa"></i>Star Rating Descending</a></li>
	</ul>
</div>

</div>

	<script type="text/javascript">
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text(obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-3').removeClass('active');
				});

			});

		</script>

<?php include 'inc/specials/hotel-item.php' ?>

        
  