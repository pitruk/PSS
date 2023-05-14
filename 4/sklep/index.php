<html>
<head>
	<title>BlueMC - Sklep</title>
	<link rel="shortcut icon" href="../inc/images/favicon.ico">
	<meta charset="utf-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../inc/css/w3.css">
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
	<link rel="stylesheet" href="../inc/css/ajax/materialize.css">
	<link rel="stylesheet" href="../inc/css/main.css">
	<link rel="stylesheet" href="../inc/css/sklep/main.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<script src="../inc/js/sklep/sklep.js" type="text/javascript"></script>
	<script src="../inc/js/sklep/shop.js" type="text/javascript"></script>
	<script src="../inc/js/sklep/modal.js" type="text/javascript"></script>
	<script src="inc/ajax.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
	<style>
		#counter{
			background-color: steelblue;
			height: 30px;
			width: 100%;
		}
		.counter-text{
			background-color: indianred;
			height: 30px;
			text-align: center;
			color: white;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<nav>
	  <div class="nav-wrapper">
		 <img class="logo" src="../inc/images/logo_male.png"/> <a href="../" class="text-logo">BlueMC.PL</a>
		 <ul class="right hide-on-med-and-down">
		   <li><a href="../" ><p class="fa fa-home"></p> GŁÓWNA</a></li>
		   <li><a href="../sklep" class="target"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
		   <li><a href="../sklep/opis.php"><div style='background-color: rgba(53, 237, 240,0.2)'><p class="fa fa-list"></p> OPIS RANG</a></div></li>
		  <!--  <li><a href="../forum"><p class="fa fa-folder"></p> FORUM</a></li>-->
		   <li><a href="../bany"><p class="fa fa-ban"></p> BANY</a></li>
		 </ul>
	  </div>
	</nav>
<br>
	<div class="container w3-animate-zoom">
	<div class="info">Ranga MegaVIP+ działa <b>jedynie</b> podczas <b>aktywnej</b> rangi MegaVIP.</div> 

<?php include("alert.php"); ?>
		<div class="items" id="changediv">
			<a onclick="loadTokenShop()" id="tokeny" class="item forums">
			<div>
				<img src="../inc/images/sklep/tokeny.png" alt="Tokeny" class="img">
				<p class="title">Tokeny</p>
			</div>
			</a>

			<a onclick="loadRankShop()" id="rangi" class="item store">
			<div>
				<img src="../inc/images/sklep/rangi.png" alt="Rangi" class="img">
				<p class="title">Rangi</p>
			</div>
			</a>

			
			<a href="vouchery.php" class="item store">
			<div>
				<img src="../inc/images/sklep/voucher.png" alt="Vouchery" class="img">
				<p class="title">Vouchery</p>
			</div>
			</a>
		</div>
		<!--
		<div class="body ostatnie_zakupy">
			<p class="title-ostatnie_zakupy">Licznik zakupów promocyjnej rangi MegaVIP+ na 365 dni.</p>
				<div id='counter'>
				
						<?php
						require 'config/konfiguracja_mysql.php';
						
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT txnid, itemid FROM payments";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<div class='counter-text' style='width:".$row['txnid']."%'>
										<p>".$row['itemid']."/5</p>
									</div>";
						   }
						}
						$conn->close();
					?>	
				
					
				</div>
		</div>
		-->
			<div class="body ostatnie_zakupy">
			<p class="title-ostatnie_zakupy">Ostatni kupujący</p>
				<?php
					require 'config/konfiguracja_mysql.php';
					
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					$sql = "SELECT Nick, Data, Przedmiot, Typ FROM Zakupy ORDER BY ID DESC LIMIT 14";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
					    // output data of each row
    					while($row = $result->fetch_assoc()) {
							
							echo "<li class='heads' style='padding-right: 5px;'><div class='tooltip'><img src='https://mc-heads.net/avatar/". $row["Nick"] ."/40' style='box-shadow: 0px 0px 8px aqua;'><span class='tooltiptext' style='margin-left: -80px;'><b>Gracz:</b> " . $row["Nick"]. "<br><b>Zakup: </b>" . $row["Przedmiot"]. "<br> <b>Data:</b> " . $row["Data"]. "</div>";
							//echo "<li class='heads'><div class='tooltip'><img src='https://www.bluemc.pl/sklep/content/head.php?nick=". $row["Nick"] ."'><span class='tooltiptext'><b>Gracz:</b> " . $row["Nick"]. "<br><b>Zakup: </b>" . $row["Przedmiot"]. "<br> <b>Data:</b> " . $row["Data"]. "</div>";
 					   }
					} else {
  					  echo "0 results";
					}
					$conn->close();
				?>	
		</div>
<?php include("alert2.php"); ?>
<div class='opis-info' style='line-height: 87%'>
<p><b>Płatności zapewnia <a href='https://microsms.pl/'>MicroSMS</a>. Korzystanie z serwisu jest jednoznaczne z akceptacją <u><a href='https://www.bluemc.pl/sklep/content/regulamin%20p%C5%82atno%C5%9Bci.pdf'>regulaminu</a></u>.</p></b>
<p>Rangi VIP/MegaVIP/MegaVIP+ oraz Tokeny są globalne i obowiązują na każdym trybie BlueMC.</p>
<p>W przypadku zmiany nicku i braku posiadania zakupionej rangi należy zgłosić się do Administracji.</p>
<p>Uprawnienia rang VIP na poszczególnych trybach znajdują się na stronie: <u><a href="https://www.bluemc.pl/sklep/opis.php">Opis Rang</a></u></p>
<p>Zakup może zostać zrealizowany offline. <b>Koszt poprzez PaySafeCard = Cena PayPal.</b></p>
</div></div><div style="margin-right: 100%">
<?php include("../inc/footer.php"); ?></div>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="../inc/js/firefly.js" type="text/javascript"></script>
	<script src="../inc/js/main.js" type="text/javascript"></script>
</body>
</html>
