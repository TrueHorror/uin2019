<!DOCTYPE html>
<html>
  <head>
    <title>Løkker</title>
  </head>
  <body>
    <?php
      for ($i=1; $i <= 10; $i++) {
        echo " - ".$i;
      }
    ?>
    <h2>Handleliste</h2>
    <ul>
      <?php
        $handleliste = array('Brød', 'Melk', 'Ost', 'Kaffe');
        for ($i=0; $i < count($handleliste) ; $i++) {
          echo "<li>". $handleliste[$i] . "</li>";
        }
       ?>
    </ul>

    <h2>Foreach løkke:</h2>
    <ul>
      <?php
        asort($handleliste);

        foreach ($handleliste as $vare) {
        echo "<li>". $vare . "</li>";
      }
       ?>
    </ul>
  </body>
</html>
