<?php
$con = mysql_connect("localhost", "root", "") or die('Can\'t create connection: '.mysql_error());
	mysql_select_db("election", $con) or die('Can\'t access specified db: '.mysql_error());


?>