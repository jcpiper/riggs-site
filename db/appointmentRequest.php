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
  }
}
else {
  $dateTwo = null;
}

echo '<br>Primary Date: ' . $date . '<br>';
var_dump($date);


if (!$db->patientExists($firstName, $lastName, $email)){
  echo 'patient insertion ' . $db->insertPatient($firstName, $lastName, $email, $phone);
}

$id = $db->getPatientId($firstName, $lastName, $email);
//if($dateTwo != ''){
//  if($dateThree != ''){
//    echo 'appointment with three dates ' .$db->insertAppointment($id, $date, $dateTwo, $dateThree);
//  } else{
//    echo 'appointment with two dates ' . $db->insertAppointment($id, $date, $dateTwo);
//  }
//} else{
//  echo 'appointment with one date ' .$db->insertAppointment($id, $date);
//}

// replacement for above logic gate
$db->insertAppointment($id, $date, $dateTwo, $dateThree);

$appointments = $db->getNewAppointments();

if ($appointments) {
  echo 'query seems to have worked';
  var_dump($appointments);
//  $results = $appointments->fetch_assoc();
//  echo "array or results <br>";
//  var_dump($results);
  
  echo 'table of results <br>';
  
  echo '<table class="data-table">';
  $fields = $appointments->fetch_fields();
  echo '<tr class="data-head">';
//  var_dump($fields);
  $field_names = array();
  foreach ($fields as $head) {
    echo "<th>$head->name</th>";
    array_push($field_names, $head->name);
  }
  echo '</tr>';
  
  while ($row = $appointments->fetch_assoc()){
    echo '<tr>';
    foreach ($field_names as $item){
      echo "<td>$row[$item]</td>";
    }
    echo '</tr>';
  }
  
}
else {
  echo 'query failed ' . $db->getError();
}
