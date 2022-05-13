 <?php

// $servername  = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bank.db";

define('DB_SERVER', 'db.ethereallab.app:3306');
define('DB_USERNAME', 'dd58');
define('DB_PASSWORD', 'mg7vRP2EyvGA');
define('DB_NAME', 'dd58');


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($link == false){
    die("connection failed".mysqli_connect_error());
}

?> 