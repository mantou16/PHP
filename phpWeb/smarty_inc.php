<?php

// put full path to Smarty.class.php
require('smarty/Smarty.class.php');
date_default_timezone_set("PRC");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');
$smarty->caching = false;


?>
