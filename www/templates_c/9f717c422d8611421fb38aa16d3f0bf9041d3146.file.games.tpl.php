<?php /* Smarty version Smarty-3.1.16, created on 2015-12-02 10:26:19
         compiled from "templates\games.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28217565cc74c4a0f49-43327801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f717c422d8611421fb38aa16d3f0bf9041d3146' => 
    array (
      0 => 'templates\\games.tpl',
      1 => 1449044745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28217565cc74c4a0f49-43327801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_565cc74c4cc925_32684391',
  'variables' => 
  array (
    'games' => 0,
    'game' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cc74c4cc925_32684391')) {function content_565cc74c4cc925_32684391($_smarty_tpl) {?><h1>GAMES</h1>
<ul class="games-grid">		
	<?php  $_smarty_tpl->tpl_vars['game'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['game']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['games']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['game']->key => $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->_loop = true;
?>
		<li class="clearfix">
			<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['game']->value['image'];?>
"></div> 
			<div class="name-price-developer-box">
				<div class="name-price-box clearfix">
					<div class="name"><a href="/games?id=<?php echo $_smarty_tpl->tpl_vars['game']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['name'];?>
</a></div>
					<div class="price">
						<?php echo $_smarty_tpl->tpl_vars['game']->value['price'];?>

					</div>
				</div>
					<div class="developer">
						<span class="dev"><?php echo $_smarty_tpl->tpl_vars['game']->value['developer'];?>
</span>
					</div>
			</div>

		</li>	
	<?php } ?>
</ul>		
<?php }} ?>
