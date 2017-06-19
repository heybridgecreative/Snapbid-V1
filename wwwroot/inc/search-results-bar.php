<div class="container search-bar enable search-results-bar" style="padding:3.5px 0px;">
    <div class="row">
        <div class="col-xs-2">
            <h3>Your Search</h3>
        </div>

        <div class="col-xs-3">
            <h5><i class="flaticon-map5">&nbsp;</i><?php echo $_GET["location"]; ?></h5>
        </div>
        
        <div class="col-xs-3">
            <h5><i class="fa fa-calendar">&nbsp;</i><?php echo $_GET["date"]; ?> - 
            <?php
                 $now = $_GET["date"]; 
                 $your_date = $_GET["todate"];
                 $datediff = $your_date - $now;
                 echo $datediff.' Nights';
            ?>
            </h5>
        </div>
        
         <div class="col-xs-2">
            <h5><i class="fa fa-users">&nbsp;</i><?php echo $_GET["persons"]; ?> Adults</h5>
        </div>  
        
         <div class="col-xs-2">
            <p class="change-search">Change Search</p>
        </div>
    </div>
</div>

<?php include 'inc/search-bar.php' ?>

<script>    
    $('.change-search').on('click', function(e) {
      $('.search-bar').toggleClass("enable disable"); //you can list several class names 
      e.preventDefault();
    });
</script>

<style>
    .enable {
        display:block;
    }
    .disable {
        display:none;
    }
</style>