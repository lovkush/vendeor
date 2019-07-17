<?php
$con = new mysqli("127.0.0.1", "root", "newpassword", "mydb");
$message = $con->query("SELECT message FROM myTable")->fetch_object()->message;
$con->close();
echo "$message <br/>";
echo "Hello From Sitesm Folder!";
phpinfo();