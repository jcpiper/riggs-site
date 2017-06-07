<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 5/31/2017
 * Time: 12:42 PM
 */

// Handles appointment requests

$conn = new mysqli('localhost', 'root', '', 'AppointmentScheduler');

echo var_dump($_POST);
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["firstDate"];
$dateTwo = $_POST["secondDate"];
$dateThree = $_POST["thirdDate"];


$sql = <<<sql
  select id FROM patients
  WHERE first_name = '$firstName' and last_name = '$lastName' and email = '$email'
sql;

$results = $conn->query($sql);

if (!$results->num_rows > 0) {
  // patient is not already in db, add him/her
  $sql = "INSERT into patients 
    (first_name,last_name,email,phone) 
    VALUES ('$firstName', '$lastName', '$email', '$phone')
  ";
  
  echo 'sql statement: ' . $sql;
  if($conn->query($sql) !== true) {
    echo "UH OH " . $conn->error;
  }
}



$results = $conn->query($sql);

if ($results->num_rows > 1) {
  die("Patient query returned more than one id. Contact sysadmin immediately.");
}

$row = $results->fetch_assoc();
$id = $row["id"];

$sql = <<<sql
  INSERT into appointments
  (first_date, second_date, third_date, patient_id)
  VALUES ('$date', '$dateTwo', '$dateThree', $id)
sql;

if($conn->query($sql) === true) {
  echo 'appointment submitted successfully';
} else {
  echo 'failed to submit appointment ' . $conn->error;
}

$results->free();
$conn->close();
echo 'bye bye';
