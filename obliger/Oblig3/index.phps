<!DOCTYPE html>
<html>
  	<head>
    	<title>Favoritt filmer</title>
    	<link href="https://fonts.googleapis.com/css?family=Bree+Serif%7CMaven+Pro" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="stil/stilark.css">
  	</head>
  	<body>
  		<?php
  			$favorittFilmerArray = array(
  				'gump' => array(
			        'tittel' => 'Forrest Gump',
			        'bilde' => 'img/forrestgump.jpg',
			        'info' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75.',
			        'skuespiller' => 'Tom Hanks',
			        'terningkast' => '5',
			        'imdb' => 'https://www.imdb.com/title/tt0109830/?ref_=nv_sr_1'
				),
				'inter' => array(
			        'tittel' => 'Interstellar',
			        'bilde' => 'img/interstellar.jpg',
			        'info' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
			        'skuespiller' => 'Matthew McConaughey',
			        'terningkast' => '6',
			        'imdb' => 'https://www.imdb.com/title/tt0816692/?ref_=nv_sr_1'
				), 
				'dark' => array(
			        'tittel' => 'The Dark Knight',
			        'bilde' => 'img/thedarkknight.jpg',
			        'info' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
			        'skuespiller' => 'Christian Bale',
			        'terningkast' => '6',
			        'imdb' => 'https://www.imdb.com/title/tt0468569/?ref_=nv_sr_1'
				),  
  			);
  		?>
  		<div id="wrapper">
			<nav class="meny">
			<?php
				echo "<a href='index.php'>Vis alle filmer</a>";
				//Sorterer på nøkkel
				ksort($favorittFilmerArray);
				foreach ($favorittFilmerArray as $key => $value) {
					echo "<a href='index.php?film=" . $key . "'>" . $value['tittel'] . "</a>";
				}
				
			?>
				
			</nav>
			<main>
				<?php
					if (isset($_GET['film'])){
						 $tittel = $favorittFilmerArray[$_GET['film']]['tittel'];
						 $bilde =  $favorittFilmerArray[$_GET['film']]['bilde'];
						 $info =  $favorittFilmerArray[$_GET['film']]['info'];
						 $skuespiller =  $favorittFilmerArray[$_GET['film']]['skuespiller'];
						 $terningkast =  $favorittFilmerArray[$_GET['film']]['terningkast'];
						 $imdb =  $favorittFilmerArray[$_GET['film']]['imdb'];

						 echo "<h1 id='tittel'>" . $tittel . "</h1>
					 			<div id='image_wrapper'><img id='bilde' src='" . $bilde . "' /></div>
					 			<div id='dice_wrapper'>
					 				<h3 id='terning_h3'>Terningkast:</h3>
					 				<img id='terning' src='img/dice-" . $terningkast . ".png' />
				 				</div>
					 			<h3>Synopsis: </h3>
					 			<p>".$info."</p>
					 			<h3>Lead actor: </h3>
					 			<p>".$skuespiller."</p>
					 			<a id='imdb' href='" . $imdb . "'>Read more on IMDB</a>	

						 ";
					}
					else {
						echo "<div class='flex-container'>";
						foreach ($favorittFilmerArray as $key => $value) {
							$tittel = $favorittFilmerArray[$key]['tittel'];
						 	$bilde =  $favorittFilmerArray[$key]['bilde'];
						 	$terningkast =  $favorittFilmerArray[$key]['terningkast'];

							echo "<div id='film-wrapper'>
							 		<h1 id='tittel'>" . $tittel . "</h1>
							 		<div id='alle-filmer-image_wrapper'><img id='bilde' src='" . $bilde . "' /></div>
						 			<div id='dice_wrapper'>";
						 			  	for ($i = 1; $i <= 6 ; $i++) {
						 			  		if ($terningkast == $i) {
						 			  			echo "<img id='alle-filmer-terning' src='img/dice-" . $terningkast . ".png' />";
						 			  		}
						 			  		else{
						 			  			echo "<img id='alle-filmer-transparent-terning' src='img/dice-" . $i . "-transparent.png' />";
						 			  		}
						 			  	}	
				 			echo "	</div>
				 					<a id='imdb' href='index.php?film=" . $key . "'>Detailed info</a>
				 				</div>";
						}
						echo "</div>";
					}	
					
				?>
		  	</main>
  		</div>
  	</body>
</html>
