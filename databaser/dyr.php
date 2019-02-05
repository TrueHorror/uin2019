<!DOCTYPE html>
<html>
  <head>
    <title>Dyr</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $database = new mysqli('itstud.hiof.no', 'fredrivo', 'fredrivo_uin_v19', 'fredrivo_uin_v19');

      //Feilmelding ved connection error
      if ($database->connect_error) {
        die($database->connect_errno. ": ".$database->connect_error);
      }
     ?>
     <table>
       <thead>
         <tr>
           <th>Norsk</th>
           <th>Engelsk</th>
         </tr>
       </thead>
       <tbody>
         <?php
            $sql = "SELECT * FROM dyr";
            $results = mysqli_query($database, $sql);

            while($row = mysqli_fetch_array($results)){
              echo "<tr>
                      <td>" . $row['norsk'] . "</td>
                    </tr>
                   ";

            }


          ?>
       </tbody>

     </table>

  </body>
</html>
