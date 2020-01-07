<?php

  header('Content-Type: application/json');

  $deletetitle =  $_POST["titolodel"];
 if (!$deletetitle ) {
   echo json_encode(-2);
   return;
 }

  $server = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "hotel";


  $conn = new mysqli($server, $username, $password, $dbname);
  if ($conn -> connect_errno) {

    echo json_encode(-1);
    return;
  }

  $sql = "

    DELETE FROM configurazioni
    WHERE id = ?

  ";

  $stmt = $conn -> prepare($sql);
  $stmt -> bind_param("i", $deletetitle);

  $res = $stmt -> execute();
  echo json_encode($res);
