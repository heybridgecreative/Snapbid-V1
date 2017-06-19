<?php 
if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: pages/index.php");
} else {
	header("Location: pages/login.php");
}
?>