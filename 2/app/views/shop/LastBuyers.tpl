			<div class="body ostatnie_zakupy">
				<p class="title-ostatnie_zakupy">Ostatni kupujący</p>
				{foreach $buyers as $buyer}
					<li class='heads' style='padding-right: 5px;'><div class='tooltip'><img src='https://mc-heads.net/avatar/{$buyer["Nick"]}/40' style='box-shadow: 0px 0px 8px aqua;'><span class='tooltiptext' style='margin-left: -80px;'><b>Gracz: </b>{$buyer["Nick"]}<br><b>Zakup: </b>{$buyer["Przedmiot"]}<br> <b>Data: </b>{$buyer["Data"]}</div>"
				{/foreach}
			</div>