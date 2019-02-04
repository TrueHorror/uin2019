<!DOCTYPE html>
<html>
  <head>
    <title>Fotballag</title>
  </head>
  <body>
    <?php
      require("fotballagarrays.php");
     ?>

    <h2>Info om fotballag</h2>
    <form action="#" method="post">
      <label for="fotballag">Fotballag:</label>
      <select  name="fotballag" id="fotballag">
        <?php
          foreach ($fotballag as $key => $value) {
            echo "<option value='" . $key . "'>" . $key . "</option>";
          }
         ?>
      </select>
      <button name="valg">Velg lag</button>
    </form>
    <ul>
      <?php
        if(isset($_POST['fotballag'])){
          echo "<h2>" . $_POST['fotballag'] . "</h2>";
          foreach ($fotballag[$_POST["fotballag"]] as $key => $value) {
            echo "<li><b>" . $key . ":</b> " . $value . "</li>";
          }
        }
       ?>
    </ul>



  </body>
</html>
