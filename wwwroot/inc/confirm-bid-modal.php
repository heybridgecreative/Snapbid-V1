<!-- Modal -->
<div class="modal md-modal md-effect-5" id="confirm-bid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Please confirm your bid!
            </h4>
         </div>
         <div class="modal-body">
                <p>Do you confirm your bid of: </p><p class="title">£<span id="bid-sliderVal">0</span></p>
                <p class="book-btn">Confirm Bid</p>
          </div>
      </div><!-- /.modal-content -->
</div>
<script src="js/bootstrap-slider.js" type="text/javascript"></script>
<script>
    $('#bid-slider').on("slide", function(slideEvt) {
	   $("#bid-sliderVal").text(slideEvt.value);
    });
</script>
