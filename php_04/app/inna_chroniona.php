<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';

$smarty = new Smarty\Smarty();

$smarty->assign('app_root',_APP_ROOT);
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title',"Inna strona chroniona");

$smarty->display(_ROOT_PATH.'/app/inna_chroniona.html');