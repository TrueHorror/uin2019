<!DOCTYPE html>
<html>
  <head>
    <title>Favoritt filmer</title>
  </head>
  <body>
  	
  	<?php
      require("interstellar.php");
      require("thedarkknight.php");
      require("forestgump.php");
     ?> 
  	 <nav class="meny">
  	 	<?php
        echo "<ul>
                <li><a href='(vis elementet som er valgt)'>" . $istitel ."</a></li>
              </ul>
             ";
  	 		//fylle menyen med antall filmer/filer
  	 	  ?>
  	 </nav>
  </body>
</html>
