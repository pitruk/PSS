<?php
/* Smarty version 4.1.0, created on 2023-04-16 18:20:49
  from '/home/www/html/bluemc_new/app/views/shop/LastBuyers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c20610fe6d6_63120696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8d0d5ec6d6e5c0e50fe25e62b56a524775b513e' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/shop/LastBuyers.tpl',
      1 => 1681662002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c20610fe6d6_63120696 (Smarty_Internal_Template $_smarty_tpl) {
?>			<div class="body ostatnie_zakupy">
				<p class="title-ostatnie_zakupy">Ostatni kupujący</p>
				 <a href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/sklep/?page=<?php echo $_smarty_tpl->tpl_vars['prev_button']->value;?>
">PREV</a>  
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
				 <a href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
/sklep/?page=<?php echo $_smarty_tpl->tpl_vars['next_button']->value;?>
">NEXT</a>  
			</div><?php }
}
