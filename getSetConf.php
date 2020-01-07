<?php

  header('Content-Type: application/json');

  list($newtitle, $newdescription) = [
                                  $_POST["titolodue"],
                                  $_POST["descrizionedue"]
                                ];
 if (!$newtitle || !$newdescription ) {
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
    UPDATE configurazioni
    SET
    title = ? ,
    description = ?
    WHERE id = 1

  ";

  $stmt = $conn -> prepare($sql);
  $stmt -> bind_param("ss", $newtitle, $newdescription);

  $res = $stmt -> execute();
  echo json_encode($res);
