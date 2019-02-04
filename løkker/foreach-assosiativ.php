<!DOCTYPE html>
<html>
  <head>
    <title>Foreach med assosiativ array</title>
  </head>
  <body>
    <?php
      //include("studiearray.php");
      require("studiearray.php");
     ?>
     <h2>Registrering</h2>
     <form action="reg.php" method="post">
       <p>
         <label for="navn">Ditt navn:</label>
         <input type="text" name="navn" id="navn">
       </p>
       <p>
         <label for="studie">Ditt studie</label>
         <select name="studie" id="studie">
          <?php
            foreach ($studier as $key => $value) {
              echo "<option value='" . $key . "'>" . $value . "</option>";
            }
          ?>
       </select>
      </p>
      <p>
        <button name="lagreStudent">Send</button>
      </p>
     </form>

  </body>
</html>
