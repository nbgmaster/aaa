<?php

  require_once("xajax/xajax_core/xajax.inc.php");

     require_once("./smarty2/libs/SmartyBC.class.php");
 
  session_start();

  $tpl = new Smarty;

  require_once("dbCon.php");

     define("ROOT_DIR", "http://localhost/aaa/");
  
  //define("ROOT_DIR", "http://richter-stefan.info/aaa/");
  
  $xajax = new xajax(ROOT_DIR."index.server.php");
  $xajax->register(XAJAX_FUNCTION, "page");
  $xajax->register(XAJAX_FUNCTION, "delete");
  $xajax->register(XAJAX_FUNCTION, "edit_comment");
  $xajax->register(XAJAX_FUNCTION, "show_details");
  
