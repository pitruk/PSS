<?php
/* Smarty version 4.1.0, created on 2022-06-10 21:36:07
  from '/home/www/html/bluemc_new/app/views/ShopRanks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a39d277e6200_94817936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ae152f4dc60ebd45b4e59e850c7321053515b7' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/ShopRanks.tpl',
      1 => 1654889763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Head.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_62a39d277e6200_94817936 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html style="height: 100%;">
	
	<?php $_smarty_tpl->_subTemplateRender("file:Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>

		<!--- NAWIGACJA --->
		<nav>
		  <div class="nav-wrapper">
			 <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/images/logo_male.png"/> <a href="/" class="text-logo">BlueMC.PL</a>
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
		<div class="container w3-animate-zoom" style="margin-top: 20%; margin-bottom: 10%;">
			<div class="info">Ranga MegaVIP+ działa <b>jedynie</b> podczas <b>aktywnej</b> rangi MegaVIP.</div> 

			<div class="items" id="changediv">
				<div id="shop" class="shop rangi">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranks']->value, 'rank');
$_smarty_tpl->tpl_vars['rank']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rank']->value) {
$_smarty_tpl->tpl_vars['rank']->do_else = false;
?>
						<li><a href='javascript:void(0);' onclick='document.getElementById(id.<?php echo $_smarty_tpl->tpl_vars['rank']->value['ID'];?>
).style.display=`block`;paypal(<?php echo $_smarty_tpl->tpl_vars['rank']->value['PayPalCena'];?>
,<?php echo $_smarty_tpl->tpl_vars['rank']->value['ID'];?>
)'' id=`myBtn`><img id='myBtn' src='<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rank']->value["Obrazek"];?>
'></a></li>";
						<div id='id". $row['ID'] ."' class='w3-modal w3-animate-opacity'>
							<div class='modalshop'>
							  <header> 
								<span onclick='document.getElementById(`id". $row['ID'] ."`).style.display=`none`' 
								class='times'><a href='javascript:void(0);' id='rangi'><p class='fa fa-times'></p></a></span>
								<p><b>". $row["Tytul"] ."</p></b><br>
							  </header>
									<nav2>
										<a onclick='sms(". $row['SMSCena'] ."," . $row['SMSNumer'] .",". $row['ID'] .")' href='javascript:void(0);'><i class='fa fa-phone'></i> SMS</a>
										<a onclick='paypal(". $row['PayPalCena'] .",". $row['ID'] .")' href='javascript:void(0);'><i class='fa fa-paypal'></i> PayPal</a>
										<a onclick='przelew(". $row['PrzelewCena'] .",". $row['ID'] .")' href='javascript:void(0);'><i class='fa fa-credit-card'></i> Przelew</a><br>
										<div id='navi". $row['ID'] ."'class='animation sms'></div>
									</nav2>
										<p class='opis' id='info". $row['ID'] ."'>SMS o treści <b>MSMS.BMC</b><br>Na numer: <b>". $row['SMSNumer'] ."</b></p>
										<p class='opis' id='koszt". $row['ID'] ."'>Koszt: <b>". $row['SMSCena'] ."zł</b></p>
										<form class='paypal' action='' method='post' id='paypal_form". $row['ID'] ."'>
											<br><input type='text' id='nick". $row['ID'] ."' name='nick' placeholder='NAZWA W GRZE'  maxlength='16' required>
											<input type='hidden' name='send' value='' /> 
											<input type='hidden' name='cmd' value='_xclick' >
											<input type='hidden' name='ID' value='". $row['ID'] ."' >
											<input type='text' id='kod". $row['ID'] ."' name='kod' placeholder='KOD ZWROTNY' maxlength='8'>
											<input type='text' id='email". $row['ID'] ."' name='email' placeholder='ADRES EMAIL'><br>
											<p id='mvipp". $row['ID'] ."' style='text-align: center'></p>
											<button type='submit' id='submit". $row['ID'] ."' class='zrealizuj' name='submit'><i class='fa fa-check'></i> Zrealizuj</button>
											<p id='timer". $row['ID'] ."' style='text-align: center'></p>
										</form>
							</div>
						  </div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			
			<div class="body ostatnie_zakupy">
				<p class="title-ostatnie_zakupy">Ostatni kupujący</p>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buyers']->value, 'buyer');
$_smarty_tpl->tpl_vars['buyer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buyer']->value) {
$_smarty_tpl->tpl_vars['buyer']->do_else = false;
?>
					<li class='heads' style='padding-right: 5px;'><div class='tooltip'><img src='https://mc-heads.net/avatar/<?php echo $_smarty_tpl->tpl_vars['buyer']->value["Nick"];?>
/40' style='box-shadow: 0px 0px 8px aqua;'><span class='tooltiptext' style='margin-left: -80px;'><b>Gracz: </b><?php echo $_smarty_tpl->tpl_vars['buyer']->value["Nick"];?>
<br><b>Zakup: </b><?php echo $_smarty_tpl->tpl_vars['buyer']->value["Przedmiot"];?>
<br> <b>Data: </b><?php echo $_smarty_tpl->tpl_vars['buyer']->value["Data"];?>
</div>"
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			
		</div>
		<div style="margin-right: 100%">
		
		<!--- BODY --->

		<!--- FOOTER --->
		<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!--- FOOTER --->

	</body>
</html>
<?php }
}
