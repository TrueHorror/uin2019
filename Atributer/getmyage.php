<!DOCTYPE html>
<html>
<head>
  <title>My age</title>
</head>
<body>

  <h1>Skriv i url etter php: "?birthyear=xxxx"</h1>

  <?php
    $birthyear = $_GET['birthyear'];
    $age = date("Y") - $birthyear;
    echo "<p>Jeg er født i " . $birthyear . ", og er i år " . $age . "år gammel.</p>";
   ?>
  <p>This is a paragraph.</p>

</body>
</html>
