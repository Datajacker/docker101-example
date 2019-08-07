<?php
  include('include/db_connection.php');
  $press_count = $conn->query("SELECT COUNT(*) FROM button_presses")->fetchColumn();
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
          <input type="submit" val="clicked" />
        </form>
        <p>The submit button has been clicked <?= $press_count ?> times.</p>
      </main>
    </body>
  </html>