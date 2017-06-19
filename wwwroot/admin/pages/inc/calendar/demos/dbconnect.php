<?php
if(!mysql_connect("cmwebdesign.co.uk.mysql","cmwebdesign_co_","FRUDexBh"))
{
	die(mysql_error());
}
if(!mysql_select_db("cmwebdesign_co_"))
{
	die(mysql_error());
}

?>