<?php
session_start();
include_once 'dbconnect.php';

$number1 = rand(1,50);
$number2 = rand(1,50);
$number3 = rand(1,50);
$number4 = rand(1,50);
$number5 = rand(1,50);

$numbers = $number1;
$numbers .= ",";
$numbers .= $number2;
$numbers .= ",";
$numbers .= $number3;
$numbers .= ",";
$numbers .= $number4;
$numbers .= ",";
$numbers .= $number5;

$bonus = rand(1,9);

$addLotto = 'INSERT INTO snapbid_lotto_entries (`username`, `numbers`, `bonus`) VALUES ("'.$_SESSION['username'].'", "'.$numbers.'", "'.$bonus.'")';

$retval = mysql_query($addLotto);

header("Location:lotto.php");
?>

