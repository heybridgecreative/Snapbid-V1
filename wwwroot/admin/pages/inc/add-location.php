<p>&nbsp;</p>
<h3>Add an location to Database</h3>
<p>Use the form below to add a new location to the list</p>
<div class="col-lg-12">
<form role="form" action="<?php $_PHP_SELF ?>" method="POST">
                                        <div class="form-group">
                                            <label>Location Name</label>
                                            <input required name="name" class="form-control">
                                        </div>
	
					 					<div class="form-group">
                                            <label>Featured on Home Page?</label>
                                            <input required name="featured" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Ordering</label>
                                            <input type="tel" required name="ordering" class="form-control">
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



