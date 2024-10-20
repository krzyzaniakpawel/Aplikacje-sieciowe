<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$loan = $_REQUEST['loan'];
$months = $_REQUEST['months'];
$interest_rate = $_REQUEST['interest_rate'];
$installment_type = $_REQUEST['installment'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if (!(isset($loan) && isset($months) && isset($interest_rate) && isset($installment_type))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ($loan == "") {
	$messages[] = 'Nie podano kwoty pożyczki.';
}
if ($months == "") {
	$messages[] = 'Nie podano okresu kredytowania.';
}
if ($interest_rate == "") {
	$messages[] = 'Nie podano oprocentowania.';
}
if ($installment_type == "") {
	$messages[] = 'Nie podano rodzaju raty.';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	if (!is_numeric($loan)) {
		$messages [] = 'Kwota kredytu nie jest liczbą.';
	}
	if (!is_numeric($months)) {
		$messages [] = 'Okres kredytowania nie jest liczbą.';
	}	
	if (!is_numeric($interest_rate)) {
		$messages [] = 'Oprocentowanie nie jest liczbą.';
	}	
}

$table[] = "<tr><th>Nr raty</th><th>Część kapitałowa</th><th>Część odsetkowa</th><th>Wysokość raty</th></tr>";

// 3. wykonaj zadanie jeśli wszystko w porządku
if (empty ( $messages )) { // gdy brak błędów
	$loan = abs(floatval($loan));
	$months = abs(floatval($months));
	$interest_rate = abs(floatval($interest_rate)) / 100;
	
	if ($installment_type == "decreasing") {
		$principal_portion = $loan / $months;
		$remaining_loan = $loan;

		for ($month = 1; $month <= $months; $month++) {
			$interest_portion = $remaining_loan * $interest_rate / 12;
			$installment = $principal_portion + $interest_portion;
			$remaining_loan -= $principal_portion;
	
			$table[] = "<tr>";
			$table[] = "<td>$month</td>";
			$table[] = "<td>" . number_format($principal_portion, 2) . "</td>";
			$table[] = "<td>" . number_format($interest_portion, 2) . "</td>";
			$table[] = "<td>" . number_format($installment, 2) . "</td>";
			$table[] = "</tr>";
		}
	} else if ($installment_type == "equal") {
		$q = 1 + ($interest_rate / 12); 
		$installment = round($loan * ($q ** $months * ($q - 1)) / ($q ** $months - 1), 2);
		$remaining_loan = $loan;

		for ($month = 1; $month <= $months; $month++) {
			$interest_portion = round($remaining_loan * $interest_rate / 12, 2);
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
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';