<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>test engine</title>

  <base href="{$smarty.const._ROOT_URL}" />
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
        {if $document.template && file_exists("templates/`$document.template`.tpl")}
          {include file="templates/`$document.template`.tpl"}
        {/if}
      </div>
  </div> 
</body>

<script src="./js/common.js"></script>
</html>
