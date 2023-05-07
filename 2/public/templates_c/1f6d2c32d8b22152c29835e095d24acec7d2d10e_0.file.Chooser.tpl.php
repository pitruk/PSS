<?php
/* Smarty version 4.1.0, created on 2022-05-08 12:35:21
  from '/home/www/html/bluemc_new/app/views/Chooser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62779ce9a916a5_14317267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f6d2c32d8b22152c29835e095d24acec7d2d10e' => 
    array (
      0 => '/home/www/html/bluemc_new/app/views/Chooser.tpl',
      1 => 1652006119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62779ce9a916a5_14317267 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="background-color: rgb(0,0,0,0.3); text-align: center; border-radius: 0 0 5px 5px; z-index: 3; margin-bottom: 10px; padding: 10px;">
	<form action="/action_page.php">
	  <img src="images/sklep/tokeny.png" alt="Rangi" class="img">
	  <br>
	  <input type='text' id='nick". $row['ID'] ."' name='nick' placeholder='NAZWA W GRZE'  maxlength='16' required>
	  <br>
	  <label for="tokens">Wybierz ilość: </label>
      <select style="border: none; text-align: center !important; border-radius: 0; color: white; background-color: rgba(0,230,250, 0.7) !important; display: block; width: 200px; margin: auto;" name="tokens" id="tokens">
        <option value="500">500 tokenów</option>
        <option value="1000">1000 tokenów</option>
        <option value="2000">2000 tokenów</option>
		<option value="3000">3000 tokenów</option>
        <option value="5500">5500 tokenów</option>
        <option value="12000">12000 tokenów</option>
      </select>
	  <br><br>
	  <input class="zrealizuj" type="submit" value="Zrealizuj">
	</form>
</div><?php }
}
