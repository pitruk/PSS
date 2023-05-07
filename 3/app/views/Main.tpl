<html style="height: 100%;">

	{include file="Head.tpl"}

	<body>

		<!--- NAWIGACJA --->
		<nav>
		  <div class="nav-wrapper">
			 <img class="logo" src="images/logo_male.png"/> <a href="/" class="text-logo">BlueMC.PL</a>
			 <ul class="right hide-on-med-and-down">
			   <li><a href=""  class="target" ><p class="fa fa-home"></p> GŁÓWNA</a></li>
			   <li><a href="sklep"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
			   <li><a href="forum"><p class="fa fa-folder"></p> FORUM</a></li>
			   <li><a href="../kary"><p class="fa fa-ban"></p> KARY</a></li>
			 </ul>
		  </div>
		</nav>
		<!--- NAWIGACJA --->
		
		<!--- BODY --->
		<div class="container center w3-animate-zoom">
			<img src="images/bluemc-400.png" style="margin-top: 140px;"><br>
			<div class="licznik-graczy">Aktualnie na serwerze przebywa <font style="color: aqua; font-size: 23px;">{$player_counter}</font> graczy.</div><br>
			<div class="items">
				<a href="sklep" class="sklep-napis">S K L E P</a>
				<a href="forum" class="sklep-napis">F O R U M</a>
			</div>
		</div>
		
		<!--- BODY --->

		<!--- FOOTER --->
		{include file="Footer.tpl"}
		<!--- FOOTER --->

	</body>
</html>
