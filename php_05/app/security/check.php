<?php

require_once dirname(__FILE__).'/../../config.php';

session_start();    // inicjacja mechanizmu startu

$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;

if (empty($role)) {
	include $conf->root_path.'/app/security/login.php';
	exit();     // zatrzymaj dalsze przetwarzanie skryptów
}