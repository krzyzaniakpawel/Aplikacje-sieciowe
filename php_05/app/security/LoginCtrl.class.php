<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';

class LoginForm {
	public $login;
	public $pass;
}

class LoginCtrl {
	private $form;
	private $msgs;

	public function __construct() {
		$this->form = new LoginForm();
		$this->msgs = new Messages();
	}

	public function get_params_login(){
		$this->form->login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
		$this->form->pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
	}
	public function validate_login() {
		$this->get_params_login();

		if (!(isset($this->form->login) && isset($this->form->pass))) {
			return false;
		}

		if ($this->form->login == "") {
			$msgs->addError('Nie podano loginu');
		}
		if ($this->form->pass == "") {
			$msgs->addError('Nie podano hasła');
		}

		if ($this->msgs->isError()) 
			return false;

		if ($this->form->login == "admin" && $this->form->pass == "admin") {
			session_start();
			$_SESSION['role'] = 'admin';
			return true;
		}
		if ($this->form->login == "user" && $this->form->pass == "user") {
			session_start();
			$_SESSION['role'] = 'user';
			return true;
		}
		
		$this->msgs->addError('Niepoprawny login lub hasło');
		return false; 
	}

	public function generate_view() {
		global $conf;

		$smarty = new Smarty\Smarty();
		if (!$this->validate_login()) {
			$smarty->assign('conf', $conf);
			$smarty->assign('form', $this->form);
			$smarty->assign('msgs', $this->msgs);
			$smarty->display($conf->root_path.'/app/security/login.html');
		} else 
			header("Location: ".$conf->app_root."/app/calc.php");
	}
}


