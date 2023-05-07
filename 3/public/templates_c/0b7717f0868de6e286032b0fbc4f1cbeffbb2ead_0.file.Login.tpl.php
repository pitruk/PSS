<?php
/* Smarty version 4.1.0, created on 2022-06-10 23:32:26
  from '/home/www/html/bluemc_new/app/views/admin/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3b86aa05c06_00773715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7717f0868de6e286032b0fbc4f1cbeffbb2ead' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/admin/Login.tpl',
      1 => 1654896744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a3b86aa05c06_00773715 (Smarty_Internal_Template $_smarty_tpl) {
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
		</div>
		<div class="box">
			<a href="https://bluemc.pl"><img src='https://bluemc.pl/inc/images/logo_male.png' width='80px' height='80px'/></a>
			<h1 style='color: #ddd'>Logowanie</h1>
				<form action="" method="post">
				<input type="text" class="pole" placeholder="Nazwa użytkownika" name="username" required/>
				<input type="password" class="pole" placeholder="Hasło" name="password" required/>
				<input type="submit" class="guzik" value="Zaloguj się" name="Submit"/>
				</form>
		</div>
		<div id="stopka">
			<p style='margin-top: 7px;'>Logowanie | © BlueMC.PL 2022</p>
		</div>
	</body>
</html><?php }
}
