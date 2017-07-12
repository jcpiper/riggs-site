<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 5/31/2017
 * Time: 1:59 PM
 */

$host = 'localhost';
$username= 'root';
$password = '';
$db = 'AppointmentScheduler';

$connection = new mysqli($host, $username, $password, $db);

// check connection

if($connection->connect_error){
  die("Failed to connect to the database :( " . $connection->connect_error);
}

if( $connection->query("DROP TABLE IF EXISTS appointments, patients, users  CASCADE") === true){
  echo "tables dropped\n";
} else {
  echo 'something went wrong while dropping preexisting tables... ' . $connection->error;
}

$table = "create table appointments(
  id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_date VARCHAR(25) not null,
  first_time VARCHAR(10) not null,
  second_date VARCHAR(35),
  second_time VARCHAR(10),
  third_date VARCHAR(35),
  third_time VARCHAR(10),
  processed BOOL NOT NULL DEFAULT FALSE,
  creationDate TIMESTAMP 
  )
 ";

if (mysqli_query($connection, $table)) {
  echo "table created successfully\n";
} else {
  echo 'failed to generate tables ' . mysqli_error($connection) . $connection->error;
}

$tableTwo = "CREATE TABLE patients(
  id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(20) not null,
    last_name VARCHAR (20) not null,
    email VARCHAR (50) not null,
    phone VARCHAR(10),
    regDate TIMESTAMP
  )";
if (mysqli_query($connection, $tableTwo)) {
  echo "table created successfully\n";
} else {
  echo 'failed to generate tables ' . mysqli_error($connection) . $connection->error;
}

$tableThree = "CREATE  TABLE  users(
    id SMALLINT unsigned auto_increment PRIMARY KEY,
    first_name varchar(20) not NULL,
    last_name varchar (20) not null,
    username VARCHAR (20) not null,
    password VARCHAR (250) not null
  )";

if (mysqli_query($connection, $tableThree)) {
  echo "table created successfully\n";
} else {
  echo 'failed to generate tables ' . mysqli_error($connection) . $connection->error;
}

$sql = "ALTER TABLE appointments ADD  patient_id SMALLINT UNSIGNED not null";

$connection->query($sql);

$sql = "ALTER TABLE appointments ADD  CONSTRAINT fk_patient_id FOREIGN KEY (patient_id) REFERENCES patients(id)";

if($connection->query($sql) === true){
  echo "Foreign key added successfully!";
} else {
  echo "Could not add foreign key " . $connection->error;
}

$pass = password_hash("password", PASSWORD_DEFAULT);
var_dump($pass);
$sql = "INSERT INTO users (username, password, first_name, last_name)
        VALUES ('admin', '$pass', 'Justin', 'Piper')";

if($connection->query($sql) === true){
  echo "<br>Admin added to db!";
} else {
  echo "Could not add admin " . $connection->error;
}
