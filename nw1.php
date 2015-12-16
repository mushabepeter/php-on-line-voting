<?php
$link=mysql_connect('DB_HOST','DB_USER','DB_')
$db_host="localhost";
$db_username="root";
$db_name="test_database";

@mysql_connect("$db_localhost","db_username","db_pass") or die
(" could not connect to MYSQL");

@mysql_select_db("db_name") or die("No database");

print"connection is successful";

?>