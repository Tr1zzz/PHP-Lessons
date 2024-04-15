<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{

	private $form;
	private $result;

	public function __construct()
	{
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams()
	{
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}

	public function validate()
	{
		if (empty($this->form->x) || empty($this->form->y) || empty($this->form->z)) {
			getMessages()->addError('All fields must be provided.');
			return false;
		}
		if (!is_numeric($this->form->x) || !is_numeric($this->form->y) || !is_numeric($this->form->z)) {
			getMessages()->addError('All values must be numeric.');
			return false;
		}
		return true;
	}

	public function process()
	{
		$this->getParams();

		// Only validate and process the calculation if the form was actually submitted
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($this->validate()) {
				// Perform calculations only if validation passes
				$this->calculateResult();
			}
		}

		$this->generateView();
	}

	private function calculateResult()
	{
		$x = floatval($this->form->x);
		$y = floatval($this->form->y);
		$z = floatval($this->form->z) / 100; // Convert percentage to decimal
		$monthlyInterestRate = $z / 12;
		$numPayments = $y * 12;

		$factor = (1 + $monthlyInterestRate) ** $numPayments;
		$denominator = $factor - 1;

		if ($denominator == 0) {
			getMessages()->addError('Division by zero error.');
			return;
		}

		$this->result->result = ($x * $monthlyInterestRate * $factor) / $denominator;
		$this->result->result = number_format($this->result->result, 2, '.', '');

		getMessages()->addInfo('Calculations performed.');
	}

	/**
	 * Generate view
	 */
	public function generateView()
	{
		//no need to create Smarty and pass it configurations and messages
		// - everything is handled by the getSmarty() function

		getSmarty()->assign('page_title', '5.A-B');
		getSmarty()->assign('page_description', 'Further extensions for the application with a single "entry point". Automatic class loading using namespaces structure was added.');
		getSmarty()->assign('page_header', 'Main Controller');

		getSmarty()->assign('form', $this->form);
		getSmarty()->assign('res', $this->result);

		getSmarty()->display('CalcView.tpl'); // no longer providing the full path - view folders are defined when loading Smarty
	}
}
