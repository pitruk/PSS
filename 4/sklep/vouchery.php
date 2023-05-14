<html>
<head>
	<title>BlueMC - Vouchery</title>
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
	<script src="../inc/js/sklep/modal.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
	<nav>
	  <div class="nav-wrapper">
		 <img class="logo" src="../inc/images/logo_male.png"/> <a href="../" class="text-logo">BlueMC.PL</a>
		 <ul class="right hide-on-med-and-down">
		   <li><a href="../" ><p class="fa fa-home"></p> GŁÓWNA</a></li>
		   <li><a href="../sklep" class="target"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
		   <!--<li><a href="../sklep/opis.php"><p class="fa fa-list"></p> OPIS RANG</a></li>
		   <li><a href="../forum"><p class="fa fa-folder"></p> FORUM</a></li>
		   <li><a href="../bany"><p class="fa fa-ban"></p> BANY</a></li>-->
		 </ul>
	  </div>
	</nav>
<br>
	<div class="container w3-animate-zoom">
	<div class="info">
Ranga MegaVIP+ działa <b>jedynie</b> podczas <b>aktywnej</b> rangi MegaVIP.
</div>
<div class='tlo-ciemne'>

			<div class="voucher shadow">
			<form action="content/vouchery.php" method="post">
			  <input type="text" id="nick" name="nick" placeholder="NAZWA W GRZE" maxlength='16' required><br>
			  <input type="text" id="voucher" name="kod" placeholder="VOUCHER" pattern="[a-zA-Z0-9-_]+" maxlength='10' required><br>
			  <button type='submit' value="Zrealizuj Voucher" class="zrealizuj"><i class='fa fa-check'></i> Zrealizuj Voucher</button>
			</form>
			</div>
				<?php
			if(isset($_POST['payment'])) {
				$payment = $_POST['payment'];
				if($payment == "accept") {
					require 'content/accept_payment.php';
				} else {
					require 'content/deny_payment.php'; 
				}
			}
		?>	
		</div>
		
				<div class="body ostatnie_zakupy">
			<p class="title-ostatnie_zakupy">Ostatni wygrani</p>
				<?php
					require 'config/konfiguracja_mysql.php';
					
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					$sql = "SELECT Nick, Data, Przedmiot FROM Vouchery_Log ORDER BY ID DESC LIMIT 14";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
					    // output data of each row
    					while($row = $result->fetch_assoc()) {
							echo "<li class='heads' style='padding-right: 5px;'><div class='tooltip'><img src='https://mc-heads.net/avatar/". $row["Nick"] ."/40' style='box-shadow: 0px 0px 8px aqua;'><span class='tooltiptext' style='margin-left: -80px;'><b>Gracz:</b>  " . $row["Nick"]. "<br><b>Przedmiot: </b>" . $row["Przedmiot"]. "<br> <b>Data:</b> " . $row["Data"]. "</div>";
 					   }
					} else {
  					  echo "0 results";
					}
					$conn->close();
				?>	
		</div>

		
<div class='opis-info'>
<!--Szczegółowy Opis Rang wraz z uprawnieniami znajduje się <a href="opis.php"><b>tutaj</a></b>.<br>-->
<p>Rangi VIP/MegaVIP/MegaVIP+ jak i Tokeny są globalne - obowiązują na każdym trybie BlueMC.</p>
</div>			
			</div>
<?php include("../inc/footer.php"); ?>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="../inc/js/firefly.js" type="text/javascript"></script>
	<script src="../inc/js/main.js" type="text/javascript"></script>
</body>
</html>

