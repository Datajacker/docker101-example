<?php
  include('include/db_connection.php');
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
        <? if ($died): ?>
          <p>Couldn't connect to the server. Please fix your docker-compose.yml file.</p>
        <? endif; ?>
        <form action="/press.php">
          <input type="submit" <?= $died ? "disabled" : "" ?>  />
        </form>
        <p>The submit button has been clicked <?= $press_count ?> times.</p>
      </main>
    </body>
  </html>