<?php 
$query = 'SELECT * from snapbid_hotels WHERE id='.$_GET['hotel_id'].'';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>
<?php foreach($rows as $row) : ?>
<?php
$imagestr = $row['images'];
$images = explode(',',$imagestr);
?>
<p>&nbsp;</p>
<h3>Edit a Hotel in the Database</h3>
<p>Use the form below to edit a hotel from the list</p>
<div class="col-lg-12">
<form role="form" action="<?php $_PHP_SELF ?>" method="POST">
                                        <div class="form-group">
                                            <label>Hotel Name</label>
                                            <input required name="name" class="form-control" value="<?php echo $row['hotelname']; ?>" >
                                            <p class="help-block">Full Name of your hotel</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input required name="address" class="form-control" value="<?php echo $row['address']; ?>">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input required name="city" class="form-control" value="<?php echo $row['city']; ?>">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>PostCode</label>
                                            <input required name="postcode" class="form-control" value="<?php echo $row['postcode']; ?>">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input required name="country" class="form-control" value="<?php echo $row['country']; ?>">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea required name="desc" class="form-control" rows="3"><?php print $row['desc']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label># of Rooms</label>
                                            <input required name="rooms" class="form-control" value="<?php echo $row['rooms']; ?>">
                                            <p class="help-block">Enter the total number of rooms in your hotel</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Star Rating</label>
											<p>Selected: 
		<?php
			$star = $row['star_rating'];
			for ($i = 0; $i < $star; $i++) {
		?>
			<i class="fa fa-star"></i>
		<?php
			}
		?></p>
                                            <select class="form-control" name="rating">
											<option value="0"> </option>
											<option value="1">&#x2605;</option>
											<option value="2">&#x2605;&#x2605;</option>
											<option value="3">&#x2605;&#x2605;&#x2605;</option>
											<option value="4">&#x2605;&#x2605;&#x2605;&#x2605;</option>
											<option value="5">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</option>
										  </select>
                                            <p class="help-block">Select the number of stars</p>
                                        </div>
                          
                                      
                                        <div class="input-group">
                   						 <input type="text" name="image" class="form-control" id="image-2" placeholder="Click on the button to select image" value="<?php echo $row['main_image']; ?>">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="image-2">Click to select Image</button>
                          					</span>
                						  </div>

									<p>&nbsp;</p>
<label>Extra Images</label>
<p>You have the oportunity to add 12 images to your hotel page. If any are left blank, the page will not display an image.</p>
									
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images11" value="<?php echo $images['0']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images11"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images1" value="<?php echo $images['1']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images1"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images2" value="<?php echo $images['2']; ?>"  placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images2"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images3" value="<?php echo $images['3']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images3"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images4" value="<?php echo $images['4']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images4"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images5" value="<?php echo $images['5']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images5"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images6" value="<?php echo $images['6']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images6"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images12" value="<?php echo $images['7']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images12"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images7" value="<?php echo $images['8']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images7"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images8" value="<?php echo $images['9']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images8"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images9" value="<?php echo $images['10']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images9"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>
                						  <div class="input-group">
                   						 <input type="text" name="images[]" class="form-control" id="images10" value="<?php echo $images['11']; ?>" placeholder="No image selected">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="images10"><i class="fa fa-file-image-o"></i></button>
                          					</span>
                						  </div>


<p>&nbsp;</p>
                                        <button type="submit" id="add" name="update" class="btn btn-default">Update Hotel</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>

<?php endforeach; ?>

