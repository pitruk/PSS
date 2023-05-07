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
				<div id="shop" class="shop rangi">
					{foreach $items as $item}
						<li><a href='{$shop_type}/{$item["ID"]}' id=`myBtn`><img id='myBtn' src='{$location}/{$item["Obrazek"]}'></a></li>
					{/foreach}
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
