<!DOCTYPE html>
<html>
<head>
  <title>My age</title>
</head>
<body>

  <h1>This is a Heading</h1>

  <form action="advancedage.php" method="post">
    <p>
      <label for="birthyear"></label>
      <input type="number" maxlength="4" name="birthyear" id="birthyear">
      <input type="submit" name="registrer"  value="Send">
    </p>

  </form>

  <?php
    if (strlen($_POST['birthyear']) < 4 || strlen($_POST['birthyear']) > 4)  {
      $message = "Ikke et gyldig årstall";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    if (isset($_POST['birthyear'])) {
      $birthyear = $_POST['birthyear'];
      echo "<p>Jeg er født i " . $birthyear . ", og er i år " . (date('Y') - $birthyear) . "år gammel.</p>";
    } else {
      $birthyear = 1999;
      echo "<p>Jeg er født i " . $birthyear . ", og er i år " . (date('Y') - $birthyear) . "år gammel.</p>";
    }


   ?>
  <p>This is a paragraph.</p>

</body>
</html>
