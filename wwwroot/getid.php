<?php
$getid = 'SELECT * FROM snapbid_users WHERE username = "'.$_SESSION['username'].'"';
$getidresult = mysql_query($getid) or die(mysql_error());
$ids = array();
while($row = mysql_fetch_array($getidresult))
$ids[] = $id;
?>

<?php foreach($ids as $id) { 
	$_SESSION['id'] = $id['id'];
} ?>
