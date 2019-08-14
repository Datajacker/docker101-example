<?php
  function connect() {
    $host = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];
    $name = $_ENV['DB_NAME'];
    $dsn = "mysql:host={$host};dbname={$name}";

    try {
      $conn = new PDO($dsn, $user, $pass);
    } catch (Exception $e) {
      $conn = false;
    }

    return $conn;
  }

  $conn = connect();
  $died = $conn === false;

  $press_count = $died ? 0 : $conn->query("SELECT COUNT(*) FROM button_presses")->fetchColumn();