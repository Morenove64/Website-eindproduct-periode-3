<nav class="navbar navbar-expand-md bg-dark navbar-dark navi sticky-top">
	<a class="navbar-brand" href="bootstrap1.php">
		<img src="Images/logo3.png" alt="logo" style="width:300px;"></a>
		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
				
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="bootstrap1.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="registrerenform.php">Registreren</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="loginalgemeen.php">Inloggen</a>
			</li>
			<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Informatie
					</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="vraag 1.php">Overzicht van alle games</a>
					<a class="dropdown-item" href="vraag 3.php">Overzicht van top 5 verkochte games</a>
					<a class="dropdown-item" href="vraag 6.php">Overzicht van alle genre's</a>
				</div>
			</li>
		</ul>
	</div>
		<form class="form-inline" method="post" action="zoekfunctie.php">
			<input class="form-control mr-sm-2" type="text" name="zkproduct" placeholder="Search">
				<button style='font-size:18px' class="btn btn-success knoppie" type="submit"><i class='fas fa-search'></i></button>
		</form>
		
	
</nav>