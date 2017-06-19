<h2 class="col-xs-6">Search Results</h2>

<div class="sorting col-xs-6">
<div id="dd" class="sort-dropdown" tabindex="1">
	<span>Sort by...</span>
	<ul class="dropdown">
		<li href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=nameASC<?php if($_GET['price']) :?>&price=<?php echo $_GET['price']; ?><?php endif; ?>"><i class="fa-sort-alpha-asc fa"></i>Hotel Name Ascending</li>
		<li href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=nameDESC<?php if($_GET['price']) :?>&price=<?php echo $_GET['price']; ?><?php endif; ?>"><i class="fa-sort-alpha-desc fa"></i>Hotel Name Descending</li>
		<li href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=priceASC<?php if($_GET['price']) :?>&price=<?php echo $_GET['price']; ?><?php endif; ?>"><i class="fa-sort-numeric-asc fa"></i>Lowest Room Price Ascending</li>
		<li href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=priceDESC<?php if($_GET['price']) :?>&price=<?php echo $_GET['price']; ?><?php endif; ?>"><i class="fa-sort-numeric-desc fa"></i>Lowest Room Price Descending</li>
		<li href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=starASC<?php if($_GET['price']) :?>&price=<?php echo $_GET['price']; ?><?php endif; ?>"><i class="fa-sort-amount-asc fa"></i>Star Rating Ascending</li>
		<li href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=starDESC<?php if($_GET['price']) :?>&price=<?php echo $_GET['price']; ?><?php endif; ?>"><i class="fa-sort-amount-desc fa"></i>Star Rating Descending</li>
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
						window.location = opt.attr("href");
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

<?php include 'inc/hotel-item.php' ?>

        
  