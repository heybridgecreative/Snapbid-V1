	<script type="text/javascript">
       var countdown = 15 * 60 * 1000;
var timerId = setInterval(function(){
  countdown -= 1000;
  var min = Math.floor(countdown / (60 * 1000));
  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);  //correct

  if (countdown <= 0) {
     clearInterval(timerId);
     window.location = ("index.php?timeout");
  } else {
     $("#countTime").html(min + " : " + sec);
  }

}, 1000); //1000ms. = 1sec.
    </script>

<div id="my-timer" style="text-align:center;">
        <p>You have <b id="countTime"></b> to complete your booking</p>        
</div>