<?php
if(!mysql_connect("eu-cdbr-azure-west-d.cloudapp.net","b40f7a3797775f","4ad93762"))
{
	die(mysql_error());
}
if(!mysql_select_db("sbsite"))
{
	die(mysql_error());
}

?>