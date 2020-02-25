<?php

$dbuser ='nomad';
$dbpass ='nomad';
$dbname ='shell';
$host = 'localhost';

// @error_reporting(0);
$con = mysql_connect($host,$dbuser,$dbpass,"shell") or die("Could not connect: " . mysql_error());
mysql_select_db("shell");
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysql_error();
}

?>
