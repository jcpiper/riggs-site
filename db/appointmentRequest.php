<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 5/31/2017
 * Time: 12:42 PM
 */

include 'db_queries.php';
// Handles appointment requests

$db = new db();

$firstName = preprocess($_POST["firstName"]);
$lastName = preprocess($_POST["lastName"]);
$email = preprocess($_POST["email"]);
$phone = preprocessPhone($_POST["phone"]);
$date = preprocess($_POST["firstDate"]);
$time = preprocess($_POST["firstTime"]);
$dateTwo = preprocess($_POST["secondDate"]);
$timeTwo = preprocess($_POST["secondTime"]);
$dateThree = preprocess($_POST["thirdDate"]);
$timeThree = preprocess($_POST["thirdTime"]);

// use php built in validators

function preprocess($input) {
  $input = trim($input);
  $input = stripslashes($input);
  return htmlspecialchars($input);
}

function preprocessPhone($phone) {
  $phone = trim($phone);
  $phone = trim($phone, '-');
  $phone = stripslashes($phone);
  return htmlspecialchars($phone);
}

if($dateTwo == ''){
  $dateTwo = null;
  $timeTwo = null;
  if($dateThree == ''){
    $dateThree = null;
    $timeThree = null;
  }
}


if (!$db->patientExists($firstName, $lastName, $email)){
  $db->insertPatient($firstName, $lastName, $email, $phone);
}

$id = $db->getPatientId($firstName, $lastName, $email);

$db->insertAppointment($id, $date, $time, $dateTwo, $timeTwo, $dateThree, $timeThree);

// redirect to home ...
header('Location: ../index.php');
exit();