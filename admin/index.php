<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 6/7/2017
 * Time: 4:18 PM
 */
// this will be the index file for the admin site
include '../db/db_queries.php';
include './src/admin_functions.php';

$db = new db();
$admin = new admin();

//
if ($appointments = $db->getNewAppointments()) {
  $admin->resultTable($appointments);
  $appointments->free();
}
