<?php





defined('DB_SERVER') ? null : define("DB_SERVER","localhost");
defined('DB_USER') ? null : define("DB_USER","root");
defined('DB_PASS') ? null : define("DB_PASS","");
defined('DB_NAME') ? null : define("DB_NAME","donate");

$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);




?>