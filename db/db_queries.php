<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 6/7/2017
 * Time: 11:05 AM
 */
  
class db{
  public $conn;
  function __construct()
  {
    $this->conn = new mysqli('localhost', 'root', '', 'AppointmentScheduler');
  }
  
  public function patientExists($fName, $lName, $email){
    $sql = "SELECT id FROM patients 
      WHERE first_name = $fName and last_name = $lName and email = $email
    ";
    $result = $this->conn->query($sql);
    
    if($result->num_rows < 1) {
      $result->free();
      return false;
    } else {
      $result->free();
      return true;
    }
  }
  
  public function getPatientId($fName, $lName, $email){
    $sql = "SELECT id FROM patients 
      WHERE first_name = $fName and last_name = $lName and email = $email
    ";
    $result = $this->conn->query($sql);
    
    $row = $result->fetch_assoc();
    return $row["id"];
  }
  
  public function insertPatient($fName, $lName, $email, $phone){
    $sql = "INSERT INTO patients (first_name, last_name, email, phone)
          VALUES ('$fName', '$lName', '$email', '$phone')";
    
    if($this->conn->query($sql) !== true){
      echo "Failed to add $fName $lName to the database " . $this->conn->error;
      return false;
    }
    return true;
  }
  
  public function insertAppointment($id, $date, $dateTwo = null, $dateThree = null){
    $sql = "INSERT INTO appointments (patient_id, first_date, second_date, third_date)
    VALUES ($id, '$date', $dateTwo, $dateThree)";
  
    if($this->conn->query($sql) !== true){
      echo "Failed to add $id $date $dateTwo $dateThree to the database " . $this->conn->error;
      return false;
    }
    return true;
  }
  
  function __destruct()
  {
    // TODO: Implement __destruct() method.
    $this->conn->close();
  }
}