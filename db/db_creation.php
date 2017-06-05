<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 5/31/2017
 * Time: 1:36 PM
 */

$host = 'localhost';
$username= 'root';
$password = '';
$db = 'AppointmentScheduler';

$connection = new mysqli($host, $username, $password);

// check connection

if($connection->connect_error){
  die("Failed to connect to the database :( " . $connection->connect_error);
}

$createDB = "Create database $db";

if ($connection->query($createDB)=== TRUE){
  echo "DB $db created successfully!";
}
else {
  echo 'error creating db... ' . $connection->error;
}