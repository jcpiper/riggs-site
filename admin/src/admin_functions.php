<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 6/28/2017
 * Time: 4:19 PM
 */

class admin {
  function __construct() {
//    TODO: make constructor
  }
  
  function resultTable($resultSet, $tableId=null, $headerClass='table-header', $rowClass='table-row') {
    if($tableId != null) {
      echo "<table id=$tableId>";
    }
    else {
      echo "<table>";
    }
    $fields = $resultSet->fetch_fields();
    echo "<tr class='$headerClass'>";
    $field_names = array();
    foreach ($fields as $head) {
      echo "<th>$head->name</th>";
      array_push($field_names, $head->name);
    }
    echo '</tr>';
  
    while ($row = $resultSet->fetch_assoc()){
      echo "<tr class=$rowClass>";
      foreach ($field_names as $item){
        echo "<td>$row[$item]</td>";
      }
      echo '</tr>';
    }
  }
}