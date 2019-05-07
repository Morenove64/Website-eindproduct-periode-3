<?php
session_start();
require 'loginklantcontrole.php';
?>
<html lang="nl">
	<head>
        <!DOCTYPE html>
	<title> Naughty dog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link rel="icon" href="Images/logomobile2.png">
		<link rel="stylesheet" type="text/css" href="Bootstrap.css">
	</head>

<body class="body1">
<?php
	include 'navigatielogin.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-12  slideshow">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="Images/Part2.jpg" alt="The Last of Us" width="1550" height="700">
				<div class="carousel-caption">
					<h3>The Last of Us</h3>
				</div>   
			</div>
				<div class="carousel-item">
				<img src="Images/uncharted44.jpg" alt="Uncharted" width="1550" height="700">
				<div class="carousel-caption">
					<h3>Uncharted 4</h3>
				</div>   
			</div>
			<div class="carousel-item">
				<img src="Images/Crash.jpg" alt="Crash Bandicoot" width="1550" height="700">
				<div class="carousel-caption">
					<h3>Crash Bandicoot</h3>
				</div>   
			</div>
                <div class="carousel-item">
                    <img src="Images/Jak3.jpg" alt="Jak 3" width="1550" height="700">
                    <div class="carousel-caption">
                        <h3>Jak 3</h3>
                    </div>
                </div>
			</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>	
		</div>	
	</div>
</div>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 lightblue">
				<header>
					<h1>Naughty Dog</h1>
				</header>
					<p> Naughty Dog, LLC is een Amerikaans computerspelontwikkelaar, gesticht door Andy Gavin en Jason Rubin in 1984, in Santa Monica, Californië.<br> Het bedrijf is in 2001 overgenomen door Sony.<br>Naughty Dog werd gesticht in 1984 onder de naam "JAM Software". Andy Gavin en Jason Rubin, die toen 16 jaar oud waren, hadden hun eerste spel gepubliceerd: Ski Crazed voor de 8-bit Apple II. In 1989 ontwikkelden ze het spel Keef the Thief voor de Apple IIgs en veranderden hun naam naar Naughty Dog.</p>
					<p>In het begin van de jaren 90 begon Naughty Dog met het schrijven van software voor spelcomputers, waaronder de Mega Drive en de 3DO. In diezelfde periode stapten ze over naar de PlayStation 2, waar het bedrijf bekend werd met hun spellen. <br>Het bedrijf staat bekend om zijn platformspellen, waaronder de Crash Bandicoot-, Jak and Daxter-, Uncharted- en The Last of Us-series.<br></p>
				</div>
			</div>
		</div>
		
		
		<div class="container">
			<div class="row">
				<div class="card col-sm-4 col-md-4 col-lg-4 card1" style="width:400px">
					<img class="card-img-top plaatje1" src="Images/lastcard.png" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">The Last of US</h4>
						<p class="card-text">The Last of Us gaat verder....</p>
						<a href="#" class="btn btn-primary">Lees meer</a>
					</div>
				</div>
				
				<div class="card col-sm-4 col-md-4 col-lg-4 card2" style="width:400px">
					<img class="card-img-top" src="Images/jak.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Jak and Daxter</h4>
						<p class="card-text">Jak and Daxter Remastered....</p>
						<a href="#" class="btn btn-primary">Lees meer</a>
					</div>
				</div>
				
				 <div class="card col-sm-4 col-md-4 col-lg-4 card3" style="width:400px">
					<img class="card-img-top" src="Images/uncharted74.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Uncharted</h4>
						<p class="card-text">Een nieuwe Uncharted ??</p>
						<a href="#" class="btn btn-primary">Lees meer</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<video class="Images/videodeel" width="" height="" controls>
					<source src="movie.mp4" type="video/mp4">
					<source src="Trailer2.mp4 HD" type="video/ogg">
					Your browser does not support the video tag.
				</video> 
			</div>
		</div>

		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-sm-6 footer">
				<p>Naughty Dog, LLC.<br>Privacy Policy | Terms of Use<br>California Privacy Rights<br>© 2018 Sony Interactive Entertainment LLC.</p>
			</div>
		
			<div class="col-lg-4 col-sm-6 plaatjes">
				<img src="Images/m.png" class="m">
				<img src="Images/privacy.png">
			</div>
		</div>
	</div>		








</body>
</html>