<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div id="shop" class="shop tokeny">
<?php
	require '../config/konfiguracja_mysql.php';
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM Przedmioty WHERE Typ='tokeny' ORDER BY Sort ASC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<li><a href='javascript:void(0);' onclick='document.getElementById(`id". $row['ID'] ."`).style.display=`block`;paypal(". $row['PayPalCena'] .",". $row['ID'] .")'' id=`myBtn`><img id='myBtn' src='". $row["Obrazek"] ."'></a></li>";
			echo "  <div id='id". $row['ID'] ."' class='w3-modal w3-animate-opacity'>
						<div class='modalshop'>
						  <header> 
							<span onclick='document.getElementById(`id". $row['ID'] ."`).style.display=`none`' 
							class='times'><a href='javascript:void(0);' id='tokeny'><p class='fa fa-times'></p></a></span>
							<p><b>". $row["Tytul"] ."</p></b><br>
						  </header>
								<nav2>
									<a onclick='sms(". $row['SMSCena'] ."," . $row['SMSNumer'] .",". $row['ID'] .")' href='javascript:void(0);'><i class='fa fa-phone'></i> SMS</a>
									<a onclick='paypal(". $row['PayPalCena'] .",". $row['ID'] .")' href='javascript:void(0);'><i class='fa fa-paypal'></i> PayPal</a>
									<a onclick='przelew(". $row['PrzelewCena'] .",". $row['ID'] .")' href='javascript:void(0);'><i class='fa fa-credit-card'></i> Przelew</a><br>
									<div id='navi". $row['ID'] ."'class='animation sms'></div>
								</nav2>
									<p class='opis' id='info". $row['ID'] ."'></b></p>
									<p class='opis' id='koszt". $row['ID'] ."'></p>
									<form class='paypal' action='' method='post' id='paypal_form". $row['ID'] ."'>
										<br><input type='text' id='nick". $row['ID'] ."' name='nick' placeholder='NAZWA W GRZE'  maxlength='16' required>
										<input type='hidden' name='send' value='' /> 
										<input type='hidden' name='cmd' value='_xclick' />
										<input type='hidden' name='ID' value='". $row['ID'] ."' />
										<input type='text' id='kod". $row['ID'] ."' name='kod' placeholder='KOD ZWROTNY' maxlength='8'>
										<input type='text' id='email". $row['ID'] ."' name='email' placeholder='ADRES EMAIL'><br>
										<input class='promocode' type='text' id='promocode". $row['ID'] ."' name='promocode' placeholder='KOD PROMOCYJNY'  maxlength='16'><br>
										<button type='submit' id='submit". $row['ID'] ."' class='zrealizuj' name='submit'><i class='fa fa-check'></i> Zrealizuj</button>
										<p id='timer". $row['ID'] ."' style='text-align: center'></p>
										<p id='mvipp". $row['ID'] ."' style='text-align: center'></p>
									</form>
						</div>
					  </div>";
	   }
	} else {
	  echo "0 results";
	}
	$conn->close();
?>
</div>
