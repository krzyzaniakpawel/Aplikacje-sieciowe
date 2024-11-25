<?php

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	public function __construct() {
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function get_params() {
		$this->form->loan = isset($_REQUEST['loan']) ? $_REQUEST['loan'] : null;
		$this->form->months = isset($_REQUEST['months']) ? $_REQUEST['months'] : null;
		$this->form->interest_rate = isset($_REQUEST['interest_rate']) ? $_REQUEST['interest_rate'] : null;
		$this->form->installment_type = isset($_REQUEST['installment']) ? $_REQUEST['installment'] : null;
	}

	function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (!(isset($this->form->loan) && isset($this->form->months) && isset($this->form->interest_rate) && isset($this->form->installment_type))) {
			//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
			return false;
		}

		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->loan == "") {
			getMessages()->addError('Nie podano kwoty pożyczki.');
		}
		if ($this->form->months == "") {
			getMessages()->addError('Nie podano okresu kredytowania.');
		}
		if ($this->form->interest_rate == "") {
			getMessages()->addError('Nie podano oprocentowania.');
		}
		if ($this->form->installment_type == "") {
			getMessages()->addError('Nie podano rodzaju raty.');
		}

		//nie ma sensu walidować dalej gdy brak parametrów
		if (!getMessages()->isError()) {
			if (!is_numeric($this->form->loan)) 
				getMessages()->addError('Kwota kredytu nie jest liczbą.');
			if (!is_numeric($this->form->months)) 
				getMessages()->addError('Okres kredytowania nie jest liczbą.');
			if (!is_numeric($this->form->interest_rate)) 
				getMessages()->addError('Oprocentowanie nie jest liczbą.');
		}

		return !getMessages()->isError();
	}

	// pobranie parametrów
	// walidacja parametrów z przygotowaniem zmiennych dla widoku
	// wykonaj zadanie jeśli wszystko w porządku
	function process() {
		$this->get_params();

		if (!$this->validate()) {
			$this->generate_view();
			return;
		}

		// global $role;
		$this->form->loan = abs(floatval($this->form->loan));
		$this->form->months = abs(floatval($this->form->months));
		$this->form->interest_rate = abs(floatval($this->form->interest_rate)) / 100;
		getMessages()->addInfo('Parametry poprawne.');
		
		// if ($this->form->loan > 1000000 && $role != "admin") {
		// 	getMessages()->addError('Tylko administrator może liczyć z kwoty powyżej miliona.');
		// 	return false;
		// }
		
		if ($this->form->installment_type == "decreasing") {
			$principal_portion = $this->form->loan / $this->form->months;
			$remaining_loan = $this->form->loan;

			for ($month = 1; $month <= $this->form->months; $month++) {
				$interest_portion = $remaining_loan * $this->form->interest_rate / 12;
				$installment = $principal_portion + $interest_portion;
				$remaining_loan -= $principal_portion;
		
				$this->result->table[] = "<tr>";
				$this->result->table[] = "<td>$month</td>";
				$this->result->table[] = "<td>" . number_format($principal_portion, 2) . "</td>";
				$this->result->table[] = "<td>" . number_format($interest_portion, 2) . "</td>";
				$this->result->table[] = "<td>" . number_format($installment, 2) . "</td>";
				$this->result->table[] = "</tr>";
			}
		} else if ($this->form->installment_type == "equal") {
			$q = 1 + ($this->form->interest_rate / 12); 
			$installment = round($this->form->loan * ($q ** $this->form->months * ($q - 1)) / ($q ** $this->form->months - 1), 2);
			$remaining_loan = $this->form->loan;

			for ($month = 1; $month <= $this->form->months; $month++) {
				$interest_portion = round($remaining_loan * $this->form->interest_rate / 12, 2);
				$principal_portion = round($installment - $interest_portion, 2);
				$remaining_loan -= $principal_portion;
		
				$this->result->table[] = "<tr>";
				$this->result->table[] = "<td>$month</td>";
				$this->result->table[] = "<td>" . number_format($principal_portion, 2) . "</td>";
				$this->result->table[] = "<td>" . number_format($interest_portion, 2) . "</td>";
				$this->result->table[] = "<td>" . number_format($installment, 2) . "</td>";
				$this->result->table[] = "</tr>";
			}
		}

		$this->form->interest_rate *= 100;
		$this->generate_view();
	}

	public function generate_view() {
		getSmarty()->assign('page_title','Przykład 06');
		getSmarty()->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
		getSmarty()->assign('page_header','Szablony Smarty');

		//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('result',$this->result);

		// 5. Wywołanie szablonu
		getSmarty()->display('CalcView.html');
	}
}