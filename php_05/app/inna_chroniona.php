<?php

require_once dirname(__FILE__).'/../config.php';
include $conf->root_path.'/app/security/check.php';

require_once $conf->root_path.'/app/InnaCtrl.class.php';

$inna = new InnaCtrl();
$inna->generate_view();