<?php
session_start();

// practice purpose

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "mysql");
define("DB_DATABASE", "registration");

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
} 
 ?>
