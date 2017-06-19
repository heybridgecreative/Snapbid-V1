<?php 

if ($_GET['hotel_id']) {
	$where = " WHERE hotel_id = ";
	$where .= $_GET['hotel_id'];
}

$query = 'SELECT * from snapbid_hotels';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>

<h3>Add a Room to Database</h3>
<p>Use the form below to add a new room to the list</p>
<div class="col-lg-12">
<form role="form" action="rooms.php" method="POST">
                                        <div class="form-group">
                                            <label>Hotel Name</label>
                                            	<select required name="hotelname" class="form-control">
                                        			<option value=""> </option>
                                        			<?php foreach($rows as $row) : ?>
                                          				<option value="<?php echo $row['id']; ?>"><?php echo $row['hotelname']; ?></option>
                                        			<?php endforeach ?>
                                        	  	</select>
                                            <p class="help-block">Select the hotel from the list</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Room Name</label>
                                            <input required name="name" class="form-control">
                                            <p class="help-block">Example: Superior Room</p>
                                        </div>

									<div class="form-group">
                                            <label>Max Occupancy</label>
                                            <input required name="occupancy" class="form-control">
                                            <p class="help-block">Example: 3</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Intro Description</label>
                                            <textarea required name="introinfo" class="form-control" rows="3"></textarea>
										 <p class="help-block">Example: 1 Queen Bed, City View (Extra Beds available: Crib, Rollaway Bed)</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Room Information</label>
                                            <textarea required name="roominfo" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Book Now Price</label>
                                            <input required name="price" class="form-control">
                                            <p class="help-block">Example: 140.00</p>
                                        </div>

                                        <div class="form-group features">
                                            <label>Features</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Queen bed">Queen bed
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="King bed">King bed
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Double bed">Double bed
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Single bed">Single bed
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Twin bed">Twin bed
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Ensuite">Ensuite
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Television">Television
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Pay movies">Pay movies
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Internet Access">Internet Access
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Broadband">Broadband
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Hairdryer">Hairdryer
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Ironing facilities">Ironing facilities
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Safe">Safe
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="features[]" type="checkbox" value="Minibar">Minibar
                                                </label>
                                            </div>

                                        </div>                         
                                      
                                        <div class="form-group">
                                            <label>Main Image</label>
										<div class="input-group">
                   						 <input type="text" name="image" class="form-control" id="image-2" placeholder="Click on the button to select image">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="image-2">Click to select Image</button>
                          					</span>
                						  </div>
                						  </div>

                                        <div class="form-group">
                                        <button type="submit" id="add" name="add" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
									</div>
                                    </form>



