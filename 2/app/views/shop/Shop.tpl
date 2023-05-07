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

			<div class="items" id="changediv">
				<a href="sklep/tokeny" id="tokeny" class="item forums">
				<div>
					<img src="{$location}/images/sklep/tokeny.png" alt="Tokeny" class="img">
					<p class="title">Tokeny</p>
				</div>
				</a>

				<a href="sklep/rangi" id="rangi" class="item store">
				<div>
					<img src="{$location}/images/sklep/rangi.png" alt="Rangi" class="img">
					<p class="title">Rangi</p>
				</div>
				</a>

				
				<a href="vouchery.php" class="item store">
				<div>
					<img src="{$location}/images/sklep/voucher.png" alt="Vouchery" class="img">
					<p class="title">Vouchery</p>
				</div>
				</a>
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
