<?php
/* Smarty version 4.1.0, created on 2022-06-10 21:45:25
  from '/home/www/html/bluemc_new/app/views/Shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a39f5546e915_15885533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29e8094657326e7415bfd51f3b992172d634154a' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/Shop.tpl',
      1 => 1654890303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Head.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_62a39f5546e915_15885533 (Smarty_Internal_Template $_smarty_tpl) {
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
