<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bekreft registrert informasjon</title>
  </head>
  <body>
    <?php
      include("header.php");
    ?>
    <main>
      <pre>
        <?php
          foreach ($_POST as $key => $value) {
            $_SESSION[$key] = $value;
          }
          var_dump($_SESSION);
        ?>
      </pre>
    </main>

  </body>
</html>
