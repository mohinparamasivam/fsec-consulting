<?php

define('DB_SRV', 'localhost');
define('DB_PASSWD', "Summer@2023!");
define('DB_USER', 'JDavies');
define('DB_NAME', 'fsecusers');

$connection = mysqli_connect(DB_SRV, DB_USER, DB_PASSWD, DB_NAME);

if($connection == false){

	die("Error: Connection to Database could not be made." . mysqli_connect_error());
}
?>
