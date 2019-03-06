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
			        'terningkast' => 'img/dice-5.png',
			        'imdb' => 'https://www.imdb.com/title/tt0109830/?ref_=nv_sr_1'
				),
				'inter' => array(
			        'tittel' => 'Interstellar',
			        'bilde' => 'img/interstellar.jpg',
			        'info' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
			        'skuespiller' => 'Matthew McConaughey',
			        'terningkast' => 'img/dice-6.png',
			        'imdb' => 'https://www.imdb.com/title/tt0816692/?ref_=nv_sr_1'
				), 
				'dark' => array(
			        'tittel' => 'The Dark Knight',
			        'bilde' => 'img/thedarkknight.jpg',
			        'info' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
			        'skuespiller' => 'Christian Bale',
			        'terningkast' => 'img/dice-6.png',
			        'imdb' => 'https://www.imdb.com/title/tt0468569/?ref_=nv_sr_1'
				),  
  			);
  		?>
  		<div id="wrapper">
			<nav class="meny">
				<form action="#" method="post">
	      			<label for="favorittFilmer">Fredrik sine favoritt filmer:</label>
	      			<select  name="favorittFilmer" id="favorittFilmer">
				        <?php
				        	foreach ($favorittFilmerArray as $key => $value) {
			          			
			          			echo "<option value='" . $key . "'>" . $value['tittel'] . "</option>";
				          	
				          	}
				            
				         
				         ?>	
			      	</select>
			      	<button id="filmBtn" name="valg">Velg film</button>
			    </form>
			</nav>
			<main>
				<?php
					if (isset($_POST['favorittFilmer'])){
						 $tittel = $favorittFilmerArray[$_POST['favorittFilmer']]['tittel'];
						 $bilde =  $favorittFilmerArray[$_POST['favorittFilmer']]['bilde'];
						 $info =  $favorittFilmerArray[$_POST['favorittFilmer']]['info'];
						 $skuespiller =  $favorittFilmerArray[$_POST['favorittFilmer']]['skuespiller'];
						 $terningkast =  $favorittFilmerArray[$_POST['favorittFilmer']]['terningkast'];
						 $imdb =  $favorittFilmerArray[$_POST['favorittFilmer']]['imdb'];
						 echo "<h1 id='tittel'>" . $tittel . "</h1>
					 			<div id='image_wrapper'><img id='bilde' src='" . $bilde . "' /></div>
					 			<div id='dice_wrapper'>
					 				<h3 id='terning_h3'>Terningkast:</h3>
					 				<img id='terning' src='" . $terningkast . "' />
				 				</div>
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
