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
			   <li><a href="../sklep"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
			   <li><a href="forum"><p class="fa fa-folder"></p> FORUM</a></li>
			   <li><a href="kary" class="target"><p class="fa fa-ban"></p> KARY</a></li>
			 </ul>
		  </div>
		</nav>
		<!--- NAWIGACJA --->
		
		<!--- BODY --->
		<div class="container w3-animate-zoom" style="margin-top: 10%; margin-bottom: 10%;">
			<div class="body ostatnie_zakupy">
				<p class="title-ostatnie_zakupy">Zbanowani Gracze</p>
				{foreach $bans as $ban}
					<li class='heads' style='padding-right: 5px;'><div class='tooltip'><img src='https://mc-heads.net/avatar/{$ban["Nick"]}/40' style='box-shadow: 0px 0px 8px aqua;'><span class='tooltiptext' style='margin-left: -80px;'><b>Gracz: </b>{$ban["Nick"]}<br><b>Zakup: </b>{$ban["Przedmiot"]}<br> <b>Data: </b>{$ban["Data"]}</div>"
				{/foreach}
			</div>
		</div>
		<div style="margin-right: 100%">
		
		<!--- BODY --->

		<!--- FOOTER --->
		{include file="Footer.tpl"}
		<!--- FOOTER --->

	</body>
</html>
