<?php
/* Smarty version 5.4.1, created on 2024-11-08 22:58:41
  from 'file:/opt/lampp/htdocs/php_04/app/calc.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e8991630040_04107122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e229a501df88b6c3f792013fd2669bf1072f051' => 
    array (
      0 => '/opt/lampp/htdocs/php_04/app/calc.php',
      1 => 1731102132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672e8991630040_04107122 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/app';
echo '<?php'; ?>

// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';
// pobranie parametrów
function get_params(&$form) {
	$form['loan'] = isset($_REQUEST['loan']) ? $_REQUEST['loan'] : null;
	$form['months'] = isset($_REQUEST['months']) ? $_REQUEST['months'] : null;
	$form['interest_rate'] = isset($_REQUEST['interest_rate']) ? $_REQUEST['interest_rate'] : null;
	$form['installment_type'] = isset($_REQUEST['installment']) ? $_REQUEST['installment'] : null;
}

// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form, &$infos, &$msgs, &$hide_intro) {
	// sprawdzenie, czy parametry zostały przekazane
	if (!(isset($form['loan']) && isset($form['months']) && isset($form['interest_rate']) && isset($form['installment_type']))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
		return false;
	}

	$hide_intro = true;
	$infos[] = "Przekazano parametry.";

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ($form['loan'] == "") {
		$msgs[] = 'Nie podano kwoty pożyczki.';
	}
	if ($form['months'] == "") {
		$msgs[] = 'Nie podano okresu kredytowania.';
	}
	if ($form['interest_rate'] == "") {
		$msgs[] = 'Nie podano oprocentowania.';
	}
	if ($form['installment_type'] == "") {
		$msgs[] = 'Nie podano rodzaju raty.';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count($msgs) == 0) {
		if (!is_numeric($form['loan'])) $msgs [] = 'Kwota kredytu nie jest liczbą.';
		if (!is_numeric($form['months'])) $msgs [] = 'Okres kredytowania nie jest liczbą.';
		if (!is_numeric($form['interest_rate'])) $msgs [] = 'Oprocentowanie nie jest liczbą.';
	}

	if (count($msgs) > 0) 
		return false;
	else 
		return true;
}

// wykonaj zadanie jeśli wszystko w porządku
function process(&$form, &$infos, &$msgs, &$table) {
	$infos[] = 'Parametry poprawne. Wykonuję obliczenia.';

	$table = array();

	global $role;
	$form['loan'] = abs(floatval($form['loan']));
	$form['months'] = abs(floatval($form['months']));
	$form['interest_rate'] = abs(floatval($form['interest_rate'])) / 100;
	
	if ($form['loan'] > 1000000 && $role != "admin") {
		$messages[] = "Tylko administrator może liczyć z kwoty powyżej miliona.";
		return false;
	}
	
	if ($form['installment_type'] == "decreasing") {
		$principal_portion = $form['loan'] / $form['months'];
		$remaining_loan = $form['loan'];

		for ($month = 1; $month <= $form['months']; $month++) {
			$interest_portion = $remaining_loan * $form['interest_rate'] / 12;
			$installment = $principal_portion + $interest_portion;
			$remaining_loan -= $principal_portion;
	
			$table[] = "<tr>";
			$table[] = "<td>$month</td>";
			$table[] = "<td>" . number_format($principal_portion, 2) . "</td>";
			$table[] = "<td>" . number_format($interest_portion, 2) . "</td>";
			$table[] = "<td>" . number_format($installment, 2) . "</td>";
			$table[] = "</tr>";
		}
	} else if ($form['installment_type'] == "equal") {
		$q = 1 + ($form['interest_rate'] / 12); 
		$installment = round($form['loan'] * ($q ** $form['months'] * ($q - 1)) / ($q ** $form['months'] - 1), 2);
		$remaining_loan = $form['loan'];

		for ($month = 1; $month <= $form['months']; $month++) {
			$interest_portion = round($remaining_loan * $form['interest_rate'] / 12, 2);
			$principal_portion = round($installment - $interest_portion, 2);
			$remaining_loan -= $principal_portion;
	
			$table[] = "<tr>";
			$table[] = "<td>$month</td>";
			$table[] = "<td>" . number_format($principal_portion, 2) . "</td>";
			$table[] = "<td>" . number_format($interest_portion, 2) . "</td>";
			$table[] = "<td>" . number_format($installment, 2) . "</td>";
			$table[] = "</tr>";
		}
	}

	$form['interest_rate'] *= 100;

	return true;
}

$form = null;
$infos = [];
$messages = [];
$table = null;

get_params($form);
if (validate($form, $infos, $messages, $hide_intro))
	process($form, $infos, $messages, $table);

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('table',$table);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');<?php }
}
