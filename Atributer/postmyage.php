<!DOCTYPE html>
<html>
<head>
  <title>My age</title>
</head>
<body>

  <h1>This is a Heading</h1>

  <form action="postmyage.php" method="post">
    <p>
      <label for="birthyear"></label>
      <input type="number" maxlength="4" name="birthyear" id="birthyear">
      <input type="submit" name="registrer"  value="Send">
    </p>

  </form>

  <?php
    //$birthyear = $_POST['birthyear']
    //$age
    echo "<p>Jeg er født i " . $_POST['birthyear'] . ", og er i år " . (date('Y') - $_POST['birthyear']) . "år gammel.</p>";
   ?>
  <p>This is a paragraph.</p>

</body>
</html>
