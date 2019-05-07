<nav class="navbar navbar-expand-md bg-dark navbar-dark navi sticky-top">
	<a class="navbar-brand" href="bootstrap1.php">
		<img src="Images/logo3.png" alt="logo" style="width:300px;"></a>
		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
				
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="bootstrap3.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="uitloggenbeheerder.php">Uitloggen</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="registrerenbeheerderform.php">Beheerder toevoegen</a>
			</li>
			<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Informatie
					</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="vraag 1.php">Overzicht van alle games</a>
					<a class="dropdown-item" href="vraag 2.php">Overzicht van alle klanten</a>
					<a class="dropdown-item" href="vraag 3.php">Overzicht van top 5 verkochte games</a>
					<a class="dropdown-item" href="vraag 4.php">Overzicht van verkochte games per datum</a>
					<a class="dropdown-item" href="vraag 5.php">Overzicht van aantal klanten per woonplaats</a>
					<a class="dropdown-item" href="vraag 6.php">Overzicht van alle genre's</a>
					<a class="dropdown-item" href="vraag 7.php">Overzicht van aantal keren verkocht per game</a>
					<a class="dropdown-item" href="vraag 8.php">Overzicht aantal verkochte games per jaar</a>
					<a class="dropdown-item" href="vraag 9.php">Overzicht aantal games per klant</a>
					<a class="dropdown-item" href="vraag 10.php">Overzicht van resultaten op trailers</a>
				</div>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="muteren.php">Muteren</a>
            </li>
            <li class="nav-item">
                <a style='font-size:18px'class="nav-link" href="bootstrap3.php" disabled><i class='fas fa-id-card'></i>
                    <?php
                    echo " ";
                    echo $_SESSION['voornaam'];
                    echo " ";
                    echo $_SESSION['achternaam'];
                    ?>
                </a>
            </li>
		</ul>
	</div>
		<form class="form-inline" method="post" action="zoekfunctie.php">
			<input class="form-control mr-sm-2" type="text" name="zkproduct" placeholder="Search">
				<button class="btn btn-success knoppie" type="submit">Search</button>
		</form>
		
	
</nav>