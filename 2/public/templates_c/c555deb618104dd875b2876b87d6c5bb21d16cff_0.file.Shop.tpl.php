<?php
/* Smarty version 4.1.0, created on 2022-06-11 02:11:53
  from '/home/www/html/bluemc_new/app/views/shop/Shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3ddc90ea849_48541434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c555deb618104dd875b2876b87d6c5bb21d16cff' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/shop/Shop.tpl',
      1 => 1654906298,
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
function content_62a3ddc90ea849_48541434 (Smarty_Internal_Template $_smarty_tpl) {
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

			<div class="items" id="changediv">
				<a href="sklep/tokeny" id="tokeny" class="item forums">
				<div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/images/sklep/tokeny.png" alt="Tokeny" class="img">
					<p class="title">Tokeny</p>
				</div>
				</a>

				<a href="sklep/rangi" id="rangi" class="item store">
				<div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/images/sklep/rangi.png" alt="Rangi" class="img">
					<p class="title">Rangi</p>
				</div>
				</a>

				
				<a href="vouchery.php" class="item store">
				<div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/images/sklep/voucher.png" alt="Vouchery" class="img">
					<p class="title">Vouchery</p>
				</div>
				</a>
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
