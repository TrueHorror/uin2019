<!DOCTYPE html>
<html>
  	<head>
    	<title>Favoritt filmer</title>
    	<link href="https://fonts.googleapis.com/css?family=Bree+Serif%7CMaven+Pro" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="stil/stilark.css">
  	</head>
  	<body>
  		<div id="wrapper">
			<nav class="meny">
				<a href="index.php?tittel=interstellar">Interstellar</a>
				<a href="index.php?tittel=forestgump">Forrest Gump</a>
				<a href="index.php?tittel=thedarkknight">The Dark Knight</a>
			</nav>
			<main>
				<?php
					if (isset($_GET['tittel'])){
						$tittel = $_GET['tittel'];
						require("$tittel".".php");	
						echo "<h1 id='tittel'>" . $tittel . "</h1>
						<div id='image_wrapper'><img id='bilde' src='" . $bilde . "' /></div>
						<h3>Synopsis: </h3>
						<p>".$info."</p>
						<h3>Lead actor: </h3>
						<p>".$skuespiller."</p>
						<a id='imdb' href='" . $imdb . "'>Read more on IMDB</a>	

						";	
				}
					
				?>
		  	</main>
  		</div>
  	</body>
</html>
