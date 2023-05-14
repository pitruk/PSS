<html>
<head>
	<title>BlueMC - Sklep</title>
	<link rel="shortcut icon" href="../inc/images/favicon.ico">
	<meta charset="utf-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../inc/css/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="../inc/css/main.css">
	<link rel="stylesheet" href="../inc/css/sklep/main.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<script src="../inc/js/sklep/sklep.js" type="text/javascript"></script>
	<script src="../inc/js/sklep/shop.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
	<nav>
	  <div class="nav-wrapper">
		 <img class="logo" src="../inc/images/logo_male.png"/> <a href="../" class="text-logo">BlueMC.PL</a>
		 <ul class="right hide-on-med-and-down">
		   <li><a href="../" ><p class="fa fa-home"></p> GŁÓWNA</a></li>
		   <li><a href="../sklep" class="target"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
		   <li><a href="../forum"><p class="fa fa-folder"></p> FORUM</a></li>
		   <li><a href="../bany"><p class="fa fa-ban"></p> BANY</a></li>
		 </ul>
	  </div>
	</nav>
<br>
	<div class="container w3-animate-zoom">
	<div class="info">
Ranga MegaVIP+ działa <b>jedynie</b> podczas aktywnej rangi MegaVIP.
</div>
<div class='tlo-ciemne'>

				<?php
					if(isset($_GET['return'])) {
						$get = $_GET['return'];
						if($get == "error") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Realizacja zamówienia nie powiodła się.</b>
      <p>Wystąpił błąd podczas realizacji zamówienia.</p>
	  <p style='font-size: 13px'>Jeśli uważasz, że to błąd skontaktuj się z Administracją.</p></div>";
						} else if ($get == "empty") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Realizacja zamówienia nie powiodła się.</b>
      <p>Wypełnij wszystkie wymagane pola.</p>
	  <p style='font-size: 13px'>Jeśli uważasz, że to błąd skontaktuj się z Administracją.</p></div>";
						} else if ($get == "bad_code") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Realizacja zamówienia nie powiodła się.</b>
      <p>Kod został już wykorzystany lub nie istnieje.</p>
	  <p style='font-size: 13px'>Jeśli uważasz, że to błąd skontaktuj się z Administracją.</p></div>";
						} else if ($get == "cancelled") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Realizacja zamówienia nie powiodła się.</b>
      <p>Płatność została anulowana.</p></div>";
						} else if ($get == "accepted") {
							echo "<div class='alert-zielony'>	 <img src='../inc/images/sklep/akcept.png'/ height='60px;'><br>
	  <b><p>Zamówienie zostało zrealizowane.</b></p>
	  <p style='font-size: 13px'>Maksymalnie w ciągu <b>10 minut</b> zamówienie powinno zostać przydzielone do konta.<br>
	  W przeciwnym wypadku prosimy o kontakt z Główną Administracją na serwerze Discord.</p></div>";
						} else if ($get == "bad_email") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Podano nieporawidłowy format adresu email.</b>
      <p>Płatność została anulowana.</p></div>";
						} else if ($get == "none_promocode") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Podany kod promocyjny nie istnieje.</b>
      <p>Płatność została anulowana.</p></div>";
						} else if ($get == "used_promocode") {
							echo "<div class='alert'><img src='../inc/images/sklep/alert.png'/ height='50px;'><br>
      <b>Kod promocyjny został już użyty w tym miesiącu.</b>
      <p>Płatność została anulowana.</p></div>";
						}
					}
				?>
		</div>

		
<div class='opis-info'>
<p>Płatności zapewnia <a href='https://microsms.pl/'>MicroSMS</a>. Korzystanie z serwisu jest jednoznaczne z akceptacją <a href='https://www.bluemc.pl/sklep/content/regulamin%20p%C5%82atno%C5%9Bci.pdf'>regulaminu</a>.</p>
Szczegółowy Opis Rang wraz z uprawnieniami znajduje się <a href="opis.php"><b>tutaj</a></b>.
</div>		
			</div>
<?php include("../inc/footer.php"); ?>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="../inc/js/firefly.js" type="text/javascript"></script>
	<script src="../inc/js/main.js" type="text/javascript"></script>
</body>
</html>
