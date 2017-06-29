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
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["firstDate"];
$time = $_POST["firstTime"];
$dateTwo = $_POST["secondDate"];
$timeTwo = $_POST["secondTime"];
$dateThree = $_POST["thirdDate"];
$timeThree = $_POST["thirdTime"];

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