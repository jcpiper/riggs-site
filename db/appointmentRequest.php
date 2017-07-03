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

echo var_dump($_POST);
$formVals = array();

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


$format = 'l\, M j\, Y';
var_dump(strtotime($date));
$date = date($format, strtotime($date));
if($dateTwo != ''){
  $dateTwo = date($format, strtotime($dateTwo));
  if($dateThree != ''){
    $dateThree = date($format, strtotime($dateThree));
  }
  else {
    $dateThree = null;
    $timeThree = null;
  }
}
else {
  $dateTwo = null;
  $timeTwo = null;
  $timeThree = null;
}

echo '<br>Primary Date: ' . $date . '<br>';
var_dump($date);


if (!$db->patientExists($firstName, $lastName, $email)){
  echo 'patient insertion ' . $db->insertPatient($firstName, $lastName, $email, $phone);
}

$id = $db->getPatientId($firstName, $lastName, $email);

$db->insertAppointment($id, $date, $time, $dateTwo, $timeTwo, $dateThree, $timeThree);

// redirect to home ...