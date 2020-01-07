<?php

  header('Content-Type: application/json');

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

      SELECT title,description, DATE(created_at) AS creazione
      FROM configurazioni
    

  ";
  $res = $conn -> query($sql);
  if ($res -> num_rows < 1) {

    echo json_encode(-2);
    return;
  }

  $configurazioni = [];
  while($configurazione = $res -> fetch_assoc()) {

    $configurazioni[] = $configurazione;
  }

  echo json_encode($configurazioni);
