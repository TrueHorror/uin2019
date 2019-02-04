<!DOCTYPE html>
<html>
  <head>
    <title>Registrer Student</title>
  </head>
  <body>
    <?php
      require("studiearray.php");
     ?>

    <h2>Følgende student er registrert:</h2>
    <p>Navn: <?php echo $_POST['navn']; ?></p>
    <p>Studie: <?php echo $studier[$_POST['studie']]; ?></p>


  </body>
</html>
