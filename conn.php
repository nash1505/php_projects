<?php
//connection with database code
$servername="localhost";
$dbname="news";
$username="root";
$password="";
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>