<?php
  function connect() {
    $host = "mysql";
    $user = "demo";
    $pass = "password";
    $name = "example";
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

  $press_count = 0;
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Docker Example</title>
    </head>
    <body>
      <h1>
        Docker Example
      </h1>
      <main>
        <form action="/press.php">
          <button name="clicked" val="yes">Click Me</button>
        </form>
        <p>The button has been clicked <?= $press_count ?> times</p>
      </main>
    </body>
  </html>