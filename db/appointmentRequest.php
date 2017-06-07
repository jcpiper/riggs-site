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
$dateTwo = $_POST["secondDate"];
$dateThree = $_POST["thirdDate"];


if (!$db->patientExists($firstName, $lastName, $email)){
  echo 'patient insertion ' . $db->insertPatient($firstName, $lastName, $email, $phone);
}

$id = $db->getPatientId($firstName, $lastName, $email);
if($dateTwo != ''){
  if($dateThree != ''){
    echo 'appointment with three dates ' .$db->insertAppointment($id, $date, $dateTwo, $dateThree);
  } else{
    echo 'appointment with two dates ' . $db->insertAppointment($id, $date, $dateTwo);
  }
} else{
  echo 'appointment with one date ' .$db->insertAppointment($id, $date);
}
