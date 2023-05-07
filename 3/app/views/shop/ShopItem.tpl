<!DOCTYPE html>
<html style="height: 100%;">
	
	{include file="Head.tpl"}

	<body>

		<!--- NAWIGACJA --->
		<nav>
		  <div class="nav-wrapper">
			 <img class="logo" src="{$location}/images/logo_male.png"/> <a href="/" class="text-logo">BlueMC.PL</a>
			 <ul class="right hide-on-med-and-down">
			   <li><a href="/"><p class="fa fa-home"></p> GŁÓWNA</a></li>
			   <li><a href="sklep" class="target"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
			   <li><a href="forum"><p class="fa fa-folder"></p> FORUM</a></li>
			   <li><a href="../bany"><p class="fa fa-ban"></p> BANY</a></li>
			 </ul>
		  </div>
		</nav>
		<!--- NAWIGACJA --->
		
		<!--- BODY --->
		<div class="container w3-animate-zoom" style="margin-top: 10%; margin-bottom: 10%;">
			<div class="info">Ranga MegaVIP+ działa <b>jedynie</b> podczas <b>aktywnej</b> rangi MegaVIP.</div> 

			<div class="shop-item">
										<div class='modalshop'>
						  <header> 
							<p><b>{$shopitem["Tytul"]}</p></b><br>
						  </header>
									<p class='opis' id='koszt". $row['ID'] ."'>Koszt: <b>{$shopitem["PrzelewCena"]}zł</b></p>
									<form class='paypal' action='' method='post' id='paypal_form". $row['ID'] ."'>
										<br><input type='text' id='nick". $row['ID'] ."' name='nick' placeholder='NAZWA W GRZE'  maxlength='16' required>
										<input type='hidden' name='send' value='' /> 
										<input type='hidden' name='cmd' value='_xclick' >
										<input type='hidden' name='ID' value='". $row['ID'] ."' >
										<!--<input type='text' id='kod". $row['ID'] ."' name='kod' placeholder='KOD ZWROTNY' maxlength='8'>-->
										<input type='text' id='email". $row['ID'] ."' name='email' placeholder='ADRES EMAIL'><br>
										<p id='mvipp". $row['ID'] ."' style='text-align: center'></p>
										<button type='submit' id='submit". $row['ID'] ."' class='zrealizuj' name='submit'><i class='fa fa-check'></i> Zrealizuj Płatność </button>
										<p id='timer". $row['ID'] ."' style='text-align: center'></p>
									</form>
						</div>
			</div>
			
			{include file="shop/LastBuyers.tpl"}
			
		</div>
		<div style="margin-right: 100%">
		
		<!--- BODY --->

		<!--- FOOTER --->
		{include file="Footer.tpl"}
		<!--- FOOTER --->

	</body>
</html>
