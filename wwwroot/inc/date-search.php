<?php if(!isset($_POST['date_from'])) : ?>
	<?php if(!isset($_SESSION['date_from'])) : ?>
		<?php include('search-bar.php'); ?>
	<?php endif ?>
<?php endif ?>