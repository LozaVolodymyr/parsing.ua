<?php /* Smarty version Smarty-3.1.16, created on 2015-12-02 16:06:38
         compiled from "templates\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15980565ee39d2109b5-82542773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35915472ef93bf02444904a4a773f561a74196f1' => 
    array (
      0 => 'templates\\cart.tpl',
      1 => 1449065194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15980565ee39d2109b5-82542773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_565ee39d24abe3_83421324',
  'variables' => 
  array (
    'total' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ee39d24abe3_83421324')) {function content_565ee39d24abe3_83421324($_smarty_tpl) {?><h1>CART (<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
)</h1>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<div class="cart-game-box">
		<h2><a href="/games?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h2>
		<h3><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</h3>
	</div>
<?php } ?><?php }} ?>
