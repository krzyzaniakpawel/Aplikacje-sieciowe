<?php

require_once dirname(__FILE__).'/../config.php';

require_once $conf->root_path.'/app/CalcCtrl.class.php';

$calc = new CalcCtrl();
$calc->process();
