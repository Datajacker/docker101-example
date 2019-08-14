<?php
  include('include/db_connection.php');
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Docker Example</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
      <link rel="stylesheet" href="/public/main.css">
    </head>
    <body>
      <!-- Header -->
      <div class="ui borderless fixed menu">
        <div class="ui container">
          <a href="/" class="header item">
            Docker Example
          </a>
          <div class="right item">
            <a href="" class="ui button">
              <i class="github icon"></i>
              View on Github
            </a>
          </div>
        </div>
      </div>

      <!-- Main text container -->
      <main class="ui main text container">
        <? if ($died): ?>
          <div class="ui negative message">
            <div class="header">
              Something's wrong...
            </div>
            <p>Couldn't connect to the database. Please fix your docker-compose.yml file.</p>
          </div>
        <? endif; ?>

        <h1 class="ui header">
          Docker Example
        </h1>

        <form action="/press.php">
          <button type="submit" <?= $died ? "disabled" : "" ?> class="ui button massive blue<?= $died ? " disabled" : "" ?>">
            <i class="docker icon"></i>
            Click me!
          </button>
        </form>
        <p>The button has been pressed <?= $press_count ?> times.</p>
      </main>
    </body>
  </html>