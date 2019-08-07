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
      $conn = NULL;
      die("Connection failed:\n" . $e);
    }

    return $conn;
  }

  $conn = connect();