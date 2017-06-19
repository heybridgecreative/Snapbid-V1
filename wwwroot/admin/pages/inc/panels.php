<?php
$result1 = mysql_query("SELECT count(*) FROM snapbid_hotels WHERE author_id = ".$_SESSION['aduser']."");
$row1 = mysql_fetch_row($result1);
$hotels = $row1[0];

$result2 = mysql_query("SELECT count(*) FROM snapbid_rooms JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE author_id = ".$_SESSION['aduser']."");
$row2 = mysql_fetch_row($result2);
$rooms = $row2[0];

$result3 = mysql_query("SELECT count(*) FROM snapbid_bookings JOIN snapbid_rooms ON snapbid_bookings.book_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE author_id = ".$_SESSION['aduser']."");
$row3 = mysql_fetch_row($result3);
$bookings = $row3[0];

?>



<div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $hotels; ?></div>
                                    <div>Hotels</div>
                                </div>
                            </div>
                        </div>
                        <a href="hotels.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bed fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $rooms; ?></div>
                                    <div>Rooms</div>
                                </div>
                            </div>
                        </div>
                        <a href="rooms.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-key fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $bookings; ?></div>
                                    <div>Total Bookings</div>
                                </div>
                            </div>
                        </div>
                        <a href="bookings.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
