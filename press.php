<?php
  include('include/db_connection.php');

  $date = new DateTime();

  $data = array(
    'date' => $date->format('Y-m-d')
  );

  $sql = "INSERT INTO button_presses (button_pressed_at) VALUES (:date)";
  $statement = $conn->prepare($sql);
  $statement->execute($data);

  header("Location: /index.php");
?>