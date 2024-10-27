<?php
require_once dirname(__FILE__).'/../../config.php';

function get_params_login(&$form) {
	$form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
	$form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

function validate_login(&$form, &$messages) {
	if (!(isset($form['login']) && isset($form['pass']))) {
		return false;
	}

	if ($form['login'] == "") {
		$messages [] = 'Nie podano loginu.';
	}
	if ($form['pass'] == "") {
		$messages [] = 'Nie podano hasła.';
	}

	if (count($messages) > 0) 
		return false;

	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages[] = 'Niepoprawny login lub hasło.';
	return false; 
}

$form = [];
$messages = [];

get_params_login($form);

if (!validate_login($form,$messages)) 
	include _ROOT_PATH.'/app/security/login_view.php';
else 
	//ok przekieruj lub "forward" na stronę główną
	//redirect - przeglądarka dostanie ten adres do "przejścia" na niego (wysłania kolejnego żądania)
	header("Location: "._APP_URL);
