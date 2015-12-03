<?php
  require_once ('config.php');
  require_once (_ENGINE_CORE_PATH.'classes/core/clDb.php');
  require_once (_ENGINE_CORE_PATH.'classes/core/clService.php');
  require_once (_ENGINE_CORE_PATH.'classes/project/clProducts.php');
  require_once (_ENGINE_CORE_PATH.'classes/project/clGameservices.php');
  
  session_save_path(dirname(__FILE__)."/sessions_store/");
  ini_set("session.gc_maxlifetime", SESSION_TIMEOUT);
  ini_set("session.gc_probability", 1);
  ini_set("session.gc_divisor", 10);

  session_start();

  $Db = Db::getInstance();

  $document = array();
  $document["template"] = "";
  $path = explode("/", $_GET["path"]);

  ############# JavaScript Queries Processing BEGIN #############
  if(isset($path[0]) && $path[0] == "query" && is_file("./queries/".$path[1].".command.php"))
  {
    $params = $_POST;
    $data = array();

    require_once("./queries/".$path[1].".command.php");
    echo json_encode(array("data" => $data));

    exit();
  }
  ############# JavaScript Queries Processing END   #############

  
  require_once (_ENGINE_LIB_PATH."smarty/Smarty.class.php");
  $smarty = new Smarty();

  if(isset($path[0]) && $path[0] && is_file("./controllers/".$path[0].".php"))
    require_once("./controllers/".$path[0].".php");



  $smarty->assign("document", $document);
  $smarty->display("templates/index.tpl");

 // session_destroy();

?>
