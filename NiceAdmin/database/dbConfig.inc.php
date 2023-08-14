<?php

define('DB_SERVERNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE_NAME','online_shopping');

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>