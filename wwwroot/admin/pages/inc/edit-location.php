<p>&nbsp;</p>
<h3>Edit an event to Location</h3>
<p>Use the form below to edit a location</p>
<div class="col-lg-12">
<?php foreach($rows as $row) : ?>
<form role="form" action="<?php $_PHP_SELF ?>" method="POST">
<input type="hidden" name="id" value="<?php echo $row['location_id'];?>">
                                        <div class="form-group">
                                            <label>Event Name</label>
                                            <input required name="name" class="form-control" value="<?php echo $row['location_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Featured on Home Page?</label>
                                            <input required name="featured" class="form-control" value="<?php echo $row['location_featured']; ?>">
                                        </div>	
					 					<div class="form-group">
                                            <label>Ordering</label>
                                            <input required name="ordering" class="form-control" value="<?php echo $row['locations_ordering']; ?>">
                                        </div>

                                        <div class="input-group">
										<label>Main Image</label>
                   						 <input type="text" name="image" class="form-control" id="image-2" placeholder="Click on the button to select image" value="<?php echo $row['location_picture']; ?>">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="image-2">Click to select Image</button>
                          					</span>
                						  </div>
										<p>&nbsp;</p>

                                        <button type="submit" id="update" name="update" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>


<?php endforeach; ?>
