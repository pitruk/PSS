<!DOCTYPE html>
<html lang="pl">
	<head>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="../inc/images/favicon.ico">
	<link rel="stylesheet" href="{$location}/css/admin.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand"/>
	<title>{$name} | {$title}</title>
	</head>
	<body>
		<div id="pasek">
			<img src='https://bluemc.pl/inc/images/logo_male.png' class='logo'/>
			<a href="index.php" class='button-nav target'>STRONA GŁÓWNA</a>
			<a href="https://bluemc.pl" target="_blank" class='button-nav'>STRONA BLUEMC</a>
			<a href="https://panel.bluemc.pl" target="_blank" class='button-nav'>PANEL SERWERA</a>
			<!--<a href="tokeny.php" class='button-nav'>TOKENY</a>
			<a href="vouchery.php" class='button-nav'>VOUCHERY</a>
			<a href="psc.php" class='button-nav'>PSC</a>
			<a href="rangi.php" class='button-nav'>RANGI</a>
			<a href="status.php" class='button-nav'>STATUS SERWERÓW</a>-->
			<a href="logout" class='button-logout'>WYLOGUJ SIĘ</a>
		</div>
		<div class="box">
			<a href="https://bluemc.pl"><img src='https://bluemc.pl/inc/images/logo_male.png' width='80px' height='80px'/></a>
			<h1 style='color: #ddd'>Panel Administracyjny</h1>
			<!--<p style='color: #999; margin-top: -20px; font-size: 11px'>Wybierz dostępną opcję.</p>-->
			<div class='kreska'></div>
				<input type="button" class="guzik-tk" value="Tokeny" onclick="window.location='tokeny.php'"/>
				<input type="button" class="guzik-vc" value="Vouchery" onclick="window.location='vouchery.php'"/>
				<input type="button" class="guzik-psc" value="Realizacja PSC" onclick="window.location='psc.php'"/>
				<input type="button" class="guzik-rk" value="Rangi" onclick="window.location='rangi.php'"/>
				<input type="button" class="guzik-pn" value="Znajomi" onclick="window.location='friends.php'"/>
				<input type="button" class="guzik-st" value="Status serwerów" onclick="window.location='status.php'"/>
		</div>
		<div id="stopka">
			<p style='margin-top: 7px;'>Panel Administracyjny | © BlueMC.PL 2022</p>
		</div>
	</body>
</html>