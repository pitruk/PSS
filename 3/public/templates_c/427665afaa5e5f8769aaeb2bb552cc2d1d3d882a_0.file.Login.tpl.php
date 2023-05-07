<?php
/* Smarty version 4.1.0, created on 2022-06-10 22:57:30
  from '/home/www/html/bluemc_new/app/views/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3b03a729822_14549430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427665afaa5e5f8769aaeb2bb552cc2d1d3d882a' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/Login.tpl',
      1 => 1654894648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a3b03a729822_14549430 (Smarty_Internal_Template $_smarty_tpl) {
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
				<p>Username: <input type="text" name="username" value="" /></p>
				<p>Password: <input type="password" name="password" value="" /></p>
				<input type="submit" name="login" value="Log in" />
				</form>
		</div>
		<div id="stopka">
			<p style='margin-top: 7px;'>Logowanie | © BlueMC.PL 2022</p>
		</div>
	</body>
</html><?php }
}
