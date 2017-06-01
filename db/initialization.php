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

$table = "create table appointment(
  id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_date DATETIME not null,
  second_date DATETIME,
  third_date DATETIME,
  creationDate TIMESTAMP 
  );
  CREATE TABLE patient(
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (20) not null,
    last_name VARCHAR (20) not null,
    email VARCHAR (50) not null,
    phone INT (10),
    regDate TIMESTAMP 
  );
  CREATE  TABLE  user(
    id INT (5) unsigned auto_increment PRIMARY KEY,
    first_name varchar(20) not NULL,
    last_name varchar (20) not null,
    username VARCHAR (20) not null,
    password VARCHAR (50) not null
  )";

if (mysqli_query($connection, $table)) {
  echo 'tables created successfully';
} else {
  echo 'failed to generate tables ' . mysqli_error($connection);
}