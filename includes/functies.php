<?php

function convertResultToArray($DBResult){
  $result_Array = array();
    //convert $DBresult to array
    while ($row = $DBResult->fetch_assoc()) {
      $result_Array[] = $row;
    }

  return $result_Array;
}
