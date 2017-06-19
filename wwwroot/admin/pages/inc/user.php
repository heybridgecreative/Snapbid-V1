<h3>Current Users in Database</h3>
<div class="col-lg-12">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Delete</th>	
                                            <th>Edit</th>	
                                        </tr>
                                    </thead>
                                    <tbody>

<?php 

$query = 'SELECT * from snapbid_users';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>


									<?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['first_name']; ?> <?php echo $row['surname']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td style="text-align:center; vertical-align:middle;"><a onclick="return confirm('Are you sure you would like to remove this?');" href="delete-user.php?id=<?php echo $row['id']; ?>"><i class="fa fa-remove"></i></a></td>
                                            <td style="text-align:center; vertical-align:middle;"><i class="fa fa-pencil"></i></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
</div>

