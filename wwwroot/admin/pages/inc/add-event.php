<p>&nbsp;</p>
<h3>Add an event to Database</h3>
<p>Use the form below to add a new event to the list</p>
<div class="col-lg-12">
<form role="form" action="<?php $_PHP_SELF ?>" method="POST">
                                        <div class="form-group">
                                            <label>Event Name</label>
                                            <input required name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input required name="location" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" required name="date" class="form-control">
                                        </div>
	
					 					<div class="form-group">
                                            <label>Event Description</label>
                                            <input required name="description" class="form-control">
                                        </div>

                                        <div class="input-group">
										<label>Main Image</label>
                   						 <input type="text" name="image" class="form-control" id="image-2" placeholder="Click on the button to select image">
                          					<span class="input-group-btn">
                           						<button class="btn btn-default file-manager-linked" type="button" data-input-id="image-2">Click to select Image</button>
                          					</span>
                						  </div>
										<p>&nbsp;</p>

                                        <button type="submit" id="add" name="add" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>



