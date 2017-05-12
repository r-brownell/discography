<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discography</title>

    <style>
    @import url('https://fonts.googleapis.com/css?family=Amatica+SC:400,700|Overpass:200');
    </style>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body onload="return displayActive('#jukeboxTheGhost')">

	  <div class="row">
      <?php
        $file =  './includes/headernav.php';
        if (file_exists($file) && is_readable($file)) {
            require $file;
        } else {
            throw new Exception("$file can't be found");
        }
      ?>
	</div><!--row 1-->

	<main role="main">
	  <div class="row">
		  <div class="col-sm-4">

				<nav class="albumList">
					<ul>
						<li><a href="#jukeboxTheGhost" onclick="return displayActive('#jukeboxTheGhost')">Jukebox The Ghost</a></li>
						<li><a href="#safeTravels" onclick="return displayActive('#safeTravels')">Safe Travels</a></li>
						<li><a href="#everythingUnderTheSun" onclick=" return displayActive('#everythingUnderTheSun')">Everything Under The Sun</a></li>
						<li><a href="#letLiveAndLetGhost" onclick="return displayActive('#letLiveAndLetGhost')">Let Live &amp; Let Ghost</a></li>
					</ul>
				</nav>
			</div><!--column 1-->

		<div class="col-sm-8">
  	        <section id="jukeboxTheGhost" class="album">
  	          <h2 class="albumTitle">Jukebox The Ghost</h2>
  	          <img src="img/albumart/jukeboxtheghost.jpg" alt="">
  	          <ul class="songList">
  	            <li>Sound Of A Broken Heart</li>
  	            <li>Made For Ending</li>
  	            <li>Girl</li>
  	            <li>The Great Unknown</li>
  	            <li>Long Way Home</li>
  	            <li>When The Nights Get Long</li>
  	            <li>The One</li>
  	            <li>Hollywood</li>
  	            <li>Postcard</li>
  	            <li>Undeniable You</li>
  	            <li>Show Me Where It Hurts</li>
  	          </ul><!--track list-->
  	        </section>

  	        <section id="safeTravels" class="album">
  	          <h2 class="albumTitle">Safe Travels</h2>
  	          <img src="img/albumart/safetravels.jpg" alt="">
  	          <ul class="songList">
  	            <li>Somebody</li>
  	            <li>Oh, Emily</li>
  	            <li>At Last</li>
  	            <li>Say When</li>
  	            <li>Don't Let Me Fall Behind</li>
  	            <li>Dead</li>
  	            <li>Adulthood</li>
  	            <li>Ghosts In Empty Houses</li>
  	            <li>Devils On Our Side</li>
  	            <li>All For Love</li>
  	            <li>Man In The Moon</li>
  	            <li>Everybody Knows</li>
  	            <li>The Spiritual</li>
  	          </ul><!--track list-->
  	        </section>

  	        <section id="everythingUnderTheSun" class="album">
  	          <h2 class="albumTitle">Everything Under The Sun</h2>
  	          <img src="img/albumart/everythingunderthesun.jpg" alt="">
  	          <ul class="songList">
  	            <li>Schizophrenia</li>
  	            <li>Half Crazy</li>
  	            <li>Empire</li>
  	            <li>Summer Sun</li>
  	            <li>Mistletoe</li>
  	            <li>The Sun</li>
  	            <li>So Let Us Create</li>
  	            <li>Carrying</li>
  	            <li>The Sun (Interlude)</li>
  	            <li>The Stars</li>
  	            <li>The Popular Thing</li>
  	            <li>Nobody</li>
  	          </ul><!--track list-->
  	        </section>

  	        <section id="letLiveAndLetGhost" class="album">
  	          <h2 class="albumTitle">Let Live &amp; Let Ghost</h2>
  	          <img src="img/albumart/letliveandletghost.jpg" alt="">
  	          <ul class="songList">
  	            <li>Good Day</li>
  	            <li>Hold It In</li>
  	            <li>Beady Eyes On The Horizon</li>
  	            <li>Under My Skin</li>
  	            <li>Miss Templeton's 7000th Dream</li>
  	            <li>Static To The Heart</li>
  	            <li>Victoria</li>
  	            <li>My Heart's The Same</li>
  	            <li>Lighting Myself On Fire</li>
  	            <li>Fire In The Sky</li>
  	            <li>Where Are All The Scientists Now?</li>
  	            <li>A Matter Of Time</li>
  	          </ul><!--track list-->
  	        </section>
		</div><!--column 2-->
	</div><!--row 2-->
</main>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/app.js"></script>
  </body>
</html>
