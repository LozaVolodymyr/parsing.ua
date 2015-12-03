<?php /* Smarty version Smarty-3.1.16, created on 2015-12-02 15:04:46
         compiled from "templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7868565ea1e6dbbda9-10445295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342471134fa889cbac88b0960047c24d2d3c5a5f' => 
    array (
      0 => 'templates\\game.tpl',
      1 => 1449061407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7868565ea1e6dbbda9-10445295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_565ea1e6decdd7_19704562',
  'variables' => 
  array (
    'game' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ea1e6decdd7_19704562')) {function content_565ea1e6decdd7_19704562($_smarty_tpl) {?><div class="game-box">
	<h1><?php echo $_smarty_tpl->tpl_vars['game']->value['name'];?>
</h1>
	<div class="img-price-developer-box clearfix">
			<div class="game-img"><img src="<?php echo $_smarty_tpl->tpl_vars['game']->value['image'];?>
"></div>
			<div class="price-developer-add">
				<div class="price">Price: <?php echo $_smarty_tpl->tpl_vars['game']->value['price'];?>
</div>
				<div class="developer">Developer: <?php echo $_smarty_tpl->tpl_vars['game']->value['developer'];?>
</div>
				<div class="btn-preloader clearfix">
					<div onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['game']->value['id'];?>
)" class="btn-add">Add To Cart</div>
					<div class="preloader"></div>
				</div>
			</div>
	</div>
	<div class="overview"><p><?php echo $_smarty_tpl->tpl_vars['game']->value['overview'];?>
</p></div>
</div>
<?php }} ?>
