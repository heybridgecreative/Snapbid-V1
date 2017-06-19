<p>&nbsp;</p>
<h3>Add a Hotel to Database</h3>
<p>Use the form below to add a new hotel to the list</p>
<div class="col-lg-12">
<form role="form" action="<?php $_PHP_SELF ?>" method="POST">
                                        <div class="form-group">
                                            <label>Hotel Name</label>
                                            <input required name="name" class="form-control">
                                            <p class="help-block">Full Name of your hotel</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input required name="address" class="form-control">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input required name="city" class="form-control">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>PostCode</label>
                                            <input required name="postcode" class="form-control">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input required name="country" class="form-control">
                                            <p class="help-block">Example: Hoxton, London, United Kingdom</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea required name="desc" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label># of Rooms</label>
                                            <input required name="rooms" class="form-control">
                                            <p class="help-block">Enter the total number of rooms in your hotel</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Star Rating</label>
                                            <select class="form-control" name="rating">
											<option value=""> </option>
											<option value="1">&#x2605;</option>
											<option value="2">&#x2605;&#x2605;</option>
											<option value="3">&#x2605;&#x2605;&#x2605;</option>
											<option value="4">&#x2605;&#x2605;&#x2605;&#x2605;</option>
											<option value="5">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</option>
										  </select>
                                            <p class="help-block">Select the number of stars</p>
                                        </div>
                          
                                      
                                        <div class="input-group">
										<label>Main Image</label>
                   						 <input type="text" name="image" class="form-control" id="image-2" placeholder="Click on the button to select image">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="image-2">Click to select Image</button>
                          					</span>
                						  </div>
	
										<?php include('inc/add-images.php'); ?>
										<p>&nbsp;</p>

                                        <button type="submit" id="add" name="add" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>



