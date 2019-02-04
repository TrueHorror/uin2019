<!DOCTYPE html>
<html>
<head>
  <title>My age</title>
</head>
<body>

  <h1>This is a Heading</h1>

  <?php
    $birthyear = 1995;
    $age = date("Y") - $birthyear;
    echo "<p>Jeg er født i " . $birthyear . ", og er i år " . $age . "år gammel.</p>";
   ?>
  <p>This is a paragraph.</p>

</body>
</html>
