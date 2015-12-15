<?php /* Smarty version Smarty-3.1.16, created on 2015-12-14 18:05:00
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5616565cc384b0b059-89458670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1450109097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5616565cc384b0b059-89458670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_565cc384bb1339_70795685',
  'variables' => 
  array (
    'document' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cc384bb1339_70795685')) {function content_565cc384bb1339_70795685($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>test engine</title>

  <base href="<?php echo @constant('_ROOT_URL');?>
" />
  <link href="css/style.css" rel="stylesheet"/>
  <link href="css/font-awesome.css" rel="stylesheet"/>

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/jquery-ui-1.10.4.custom.min.js"></script>

  <script src="./js/jquery.tmpl.js"></script>

  <script src="js/toastr.min.js"></script>
  <link href="css/toastr.min.css" rel="stylesheet" type="text/css">

  <script src="./js/jquery.fancybox.2.15.min.js"></script>
  <link rel="stylesheet" href="css/jquery.fancybox.2.15.css"/>

  <!--script src="js/jquery.layout.1.30.min.js"></script>
  <link href="css/jquery.layout.css" rel="stylesheet"/>

  <script src="js/jquery.tablesorter.min.js"></script>

  <script src="js/chosen.jquery.min.js"></script>
  <link href="css/chosen.css" rel="stylesheet"/>
  <link href="css/font-awesome.css" rel="stylesheet"/>
  <link href="css/buttons.css" rel="stylesheet"/>

  <script src="./js/jquery.datetimepicker.js"></script>
  <script src="./js/handlebars-v2.0.0_min.js"></script>
  <link rel="stylesheet" href="css/jquery.datetimepicker.css"/>
  <script src="js/jquery.contextmenu.r2.packed.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
  <script src="js/soundmanager/soundmanager2-nodebug-jsmin.js"></script-->
</head>

<body>

  
  <div class="wrapper">
      <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['document']->value['template']&&file_exists("templates/".((string)$_smarty_tpl->tpl_vars['document']->value['template']).".tpl")) {?>
          <?php echo $_smarty_tpl->getSubTemplate ("templates/".((string)$_smarty_tpl->tpl_vars['document']->value['template']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
      </div>
  </div> 
</body>

<script src="./js/common.js"></script>
</html>
<?php }} ?>
