<?php
	if (isset($_POST['kod']) && isset($_POST['nick'])) {
		
		require '../config/konfiguracja_mysql.php';

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$kod = addslashes($_POST['kod']);
		$sql = "SELECT * FROM Vouchery WHERE Kod='". $kod ."' ORDER BY ID DESC LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			require '../config/konfiguracja_rcon.php';
			require 'rconclass.php';
			$komenda = $row['Komenda'];
			$opis = $row['Opis'];
			$nick = addslashes($_POST['nick']);
			$komenda = str_replace("[nick]", $nick, $komenda);
			$Rcon = new MinecraftRcon;
			$Rcon->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_SERVER_PASS, MQ_TIMEOUT);
			$drtata = $Rcon->Command($komenda);
			$Rcon->Disconnect();
			$xdate = date('d-m-Y H:i:s');
			$sql = "INSERT INTO `bmc_sklep`.`Vouchery_Log` (`ID`, `Nick`, `Przedmiot`, `Data`, `Kod`, `Komenda`, `Opis`) VALUES (NULL, '$nick', '".$row['Nazwa']."', '$xdate', '$kod', '$komenda', '$opis');";
			$result = $conn->query($sql);
			$sql = "DELETE FROM Vouchery WHERE Kod='". $kod ."'";
			$result = $conn->query($sql);
			echo "<form id=\"accept\" method=\"post\" action=\"../vouchery.php\" target=\"_self\"> 
				<input type=\"hidden\" name=\"payment\" value=\"accept\" />
				</form>

				<script type=\"text/javascript\">
				window.open('', '_self');
				document.getElementById('accept').submit();
				</script>";
		} else {
			echo "<form id=\"accept\" method=\"post\" action=\"../vouchery.php\" target=\"_self\">
				<input type=\"hidden\" name=\"payment\" value=\"deny\" />
				</form>

				<script type=\"text/javascript\">
				window.open('', '_self');
				document.getElementById('accept').submit();
				</script>";
		}
		$conn->close();
	}
?>