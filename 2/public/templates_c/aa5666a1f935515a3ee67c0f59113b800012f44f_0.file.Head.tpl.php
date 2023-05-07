<?php
/* Smarty version 4.1.0, created on 2022-06-11 02:09:25
  from '/home/www/html/bluemc_new/app/views/Head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a3dd35382ca5_60253856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa5666a1f935515a3ee67c0f59113b800012f44f' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/Head.tpl',
      1 => 1654906162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a3dd35382ca5_60253856 (Smarty_Internal_Template $_smarty_tpl) {
?>	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="shortcut icon" href="images/favicon.ico">
		<meta charset="utf-8">
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/css/w3.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/css/main.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/css/sklep/main.css">

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/js/navbar.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
		
	</head><?php }
}
