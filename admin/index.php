<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 6/7/2017
 * Time: 4:18 PM
 */
// this will be the index file for the admin site
include '../db/db_queries.php';

$db = new db();

$appointments = $db->getNewAppointments();

if ($appointments) {
  echo 'query seems to have worked';
}
else {
  echo 'query failed ' . $db->getError();
}