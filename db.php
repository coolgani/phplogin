<?php
/* Database connection settings */
$host = 'mysqltestsrv.mysql.database.azure.com';
$user = 'rootadmin@mysqltestsrv';
$pass = 'admin@123';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
