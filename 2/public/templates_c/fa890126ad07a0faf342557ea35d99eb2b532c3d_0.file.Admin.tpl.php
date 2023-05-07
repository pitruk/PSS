<?php
/* Smarty version 4.1.0, created on 2022-06-10 23:31:40
  from '/home/www/html/bluemc_new/app/views/admin/Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3b83c7130b0_21158089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa890126ad07a0faf342557ea35d99eb2b532c3d' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/admin/Admin.tpl',
      1 => 1654896698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a3b83c7130b0_21158089 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
	<head>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="../inc/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/css/admin.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand"/>
	<title><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
	<body>
		<div id="pasek">
			<img src='https://bluemc.pl/inc/images/logo_male.png' class='logo'/>
			<a href="index.php" class='button-nav target'>STRONA GŁÓWNA</a>
			<a href="https://bluemc.pl" target="_blank" class='button-nav'>STRONA BLUEMC</a>
			<a href="https://panel.bluemc.pl" target="_blank" class='button-nav'>PANEL SERWERA</a>
			<!--<a href="tokeny.php" class='button-nav'>TOKENY</a>
			<a href="vouchery.php" class='button-nav'>VOUCHERY</a>
			<a href="psc.php" class='button-nav'>PSC</a>
			<a href="rangi.php" class='button-nav'>RANGI</a>
			<a href="status.php" class='button-nav'>STATUS SERWERÓW</a>-->
			<a href="logout" class='button-logout'>WYLOGUJ SIĘ</a>
		</div>
		<div class="box">
			<a href="https://bluemc.pl"><img src='https://bluemc.pl/inc/images/logo_male.png' width='80px' height='80px'/></a>
			<h1 style='color: #ddd'>Panel Administracyjny</h1>
			<!--<p style='color: #999; margin-top: -20px; font-size: 11px'>Wybierz dostępną opcję.</p>-->
			<div class='kreska'></div>
				<input type="button" class="guzik-tk" value="Tokeny" onclick="window.location='tokeny.php'"/>
				<input type="button" class="guzik-vc" value="Vouchery" onclick="window.location='vouchery.php'"/>
				<input type="button" class="guzik-psc" value="Realizacja PSC" onclick="window.location='psc.php'"/>
				<input type="button" class="guzik-rk" value="Rangi" onclick="window.location='rangi.php'"/>
				<input type="button" class="guzik-pn" value="Znajomi" onclick="window.location='friends.php'"/>
				<input type="button" class="guzik-st" value="Status serwerów" onclick="window.location='status.php'"/>
		</div>
		<div id="stopka">
			<p style='margin-top: 7px;'>Panel Administracyjny | © BlueMC.PL 2022</p>
		</div>
	</body>
</html><?php }
}
