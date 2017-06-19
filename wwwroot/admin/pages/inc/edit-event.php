<p>&nbsp;</p>
<h3>Add an event to Database</h3>
<p>Use the form below to add a new hotel to the list</p>
<div class="col-lg-12">
<?php foreach($rows as $row) : ?>
<form role="form" action="<?php $_PHP_SELF ?>" method="POST">
<input type="hidden" name="id" value="<?php echo $row['specialevent_id'];?>">
                                        <div class="form-group">
                                            <label>Event Name</label>
                                            <input required name="name" class="form-control" value="<?php echo $row['specialevent_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input required name="location" class="form-control" value="<?php echo $row['specialevent_location']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" required name="date" class="form-control" value="<?php echo $row['specialevent_date']; ?>">
                                        </div>
	
					 					<div class="form-group">
                                            <label>Event Description</label>
                                            <input required name="description" class="form-control" value="<?php echo $row['specialevent_desc']; ?>">
                                        </div>

                                        <div class="input-group">
										<label>Main Image</label>
                   						 <input type="text" name="image" class="form-control" id="image-2" placeholder="Click on the button to select image" value="<?php echo $row['specialevent_image']; ?>">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="image-2">Click to select Image</button>
                          					</span>
                						  </div>
										<p>&nbsp;</p>

                                        <button type="submit" id="update" name="update" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>


<?php endforeach; ?>
