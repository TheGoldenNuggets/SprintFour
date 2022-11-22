<?php

$username = 'thegolde';
$password = 'Golden305!';
$hostname = 'localhost';
$database = 'thegolde_walnutRidgeDatabase';

$cnxn = @mysqli_connect($hostname, $username, $password, $database) or die("Error Connecting to DB: " . mysqli_connect_error());



?>