<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 6/5/2017
 * Time: 4:15 PM
 */

$host = 'localhost';
$pass = '';
$user = 'root';
$db = 'AppointmentScheduler';

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
  echo "failed to connect to $db" . $conn->connect_error;
}