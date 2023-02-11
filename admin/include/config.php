<?php
define('DB_SERVER','sql108.epizy.com');
define('DB_USER','epiz_33415803');
define('DB_PASS' ,'5RscEi9HuyG3n');
define('DB_NAME', 'epiz_33415803_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>