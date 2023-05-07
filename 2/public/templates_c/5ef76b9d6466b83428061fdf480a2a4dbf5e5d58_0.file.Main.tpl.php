<?php
/* Smarty version 4.1.0, created on 2022-05-02 01:57:08
  from '/home/www/html/bluemc_new/app/views/Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626f1e548e3782_63711973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef76b9d6466b83428061fdf480a2a4dbf5e5d58' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/Main.tpl',
      1 => 1651449425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Head.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_626f1e548e3782_63711973 (Smarty_Internal_Template $_smarty_tpl) {
?><html style="height: 100%;">

	<?php $_smarty_tpl->_subTemplateRender("file:Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>

		<!--- NAWIGACJA --->
		<nav>
		  <div class="nav-wrapper">
			 <img class="logo" src="images/logo_male.png"/> <a href="/" class="text-logo">BlueMC.PL</a>
			 <ul class="right hide-on-med-and-down">
			   <li><a href=""  class="target" ><p class="fa fa-home"></p> GŁÓWNA</a></li>
			   <li><a href="sklep"><p class="fa fa-dollar-sign"></p> SKLEP</a></li>
			   <li><a href="forum"><p class="fa fa-folder"></p> FORUM</a></li>
			   <li><a href="../bany"><p class="fa fa-ban"></p> BANY</a></li>
			 </ul>
		  </div>
		</nav>
		<!--- NAWIGACJA --->
		
		<!--- BODY --->
		<div class="container center w3-animate-zoom">
			<img src="images/bluemc-400.png" style="margin-top: 140px;"><br>
			<div class="licznik-graczy">Aktualnie na serwerze przebywa <font style="color: aqua; font-size: 23px;"><?php echo $_smarty_tpl->tpl_vars['player_counter']->value;?>
</font> graczy.</div><br>
			<div class="items">
				<a href="sklep" class="sklep-napis">S K L E P</a>
				<a href="forum" class="sklep-napis">F O R U M</a>
			</div>
		</div>
		
		<!--- BODY --->

		<!--- FOOTER --->
		<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!--- FOOTER --->

	</body>
</html>
<?php }
}
