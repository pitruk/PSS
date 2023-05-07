<?php
/* Smarty version 4.1.0, created on 2022-06-11 02:46:14
  from '/home/www/html/bluemc_new/app/views/shop/ShopItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3e5d6c05d64_06327017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd18f181d86a0e0a1550f210f883fbfdeb109dd1f' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/shop/ShopItem.tpl',
      1 => 1654908373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Head.tpl' => 1,
    'file:shop/LastBuyers.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_62a3e5d6c05d64_06327017 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="container w3-animate-zoom" style="margin-top: 10%; margin-bottom: 10%;">
			<div class="info">Ranga MegaVIP+ działa <b>jedynie</b> podczas <b>aktywnej</b> rangi MegaVIP.</div> 

			<div class="shop-item">
										<div class='modalshop'>
						  <header> 
							<p><b><?php echo $_smarty_tpl->tpl_vars['shopitem']->value["Tytul"];?>
</p></b><br>
						  </header>
									<p class='opis' id='koszt". $row['ID'] ."'>Koszt: <b><?php echo $_smarty_tpl->tpl_vars['shopitem']->value["PrzelewCena"];?>
zł</b></p>
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
			
			<?php $_smarty_tpl->_subTemplateRender("file:shop/LastBuyers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
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
