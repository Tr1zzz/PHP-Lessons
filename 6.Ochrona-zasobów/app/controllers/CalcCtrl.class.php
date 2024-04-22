<?php

namespace app\controllers;

// We thus replace 'require' with 'use', indicating only the namespace where the class is located.
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Calculator Controller
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl
{

	private $form;   // Form data (for calculations and for the view)
	private $result; // Other data for the view

	/** 
	 * Constructor - initialization of properties
	 */
	public function __construct()
	{
		// Create necessary objects
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	/** 
	 * Get parameters
	 */
	public function getParams()
	{
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}

	/** 
	 * Validate parameters
	 * @return true if no errors, false otherwise 
	 */
	public function validate()
	{
		// Check if parameters were passed
		if (!(isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
			// This situation occurs when the controller is called directly - not from the form
			return false;
		}

		// Check if necessary values were provided
		if ($this->form->x == "") {
			getMessages()->addError('Number 1 not provided');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Number 2 not provided');
		}
		if ($this->form->z == "") {
			getMessages()->addError('Number 3 not provided');
		}

		// There's no point in validating further if parameters are missing
		if (!getMessages()->isError()) {

			// Check if $x and $y are numeric
			if (!is_numeric($this->form->x)) {
				getMessages()->addError('The first value is not a number');
			}

			if (!is_numeric($this->form->y)) {
				getMessages()->addError('The second value is not a number');
			}

			if (!is_numeric($this->form->z)) {
				getMessages()->addError('The third value is not a number');
			}
		}

		return !getMessages()->isError();
	}

	/** 
	 * Retrieve values, validate, calculate and display
	 */
	public function action_calcCompute()
	{

		$this->getParams();

		if ($this->validate()) {

			// Convert parameters to integers
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->z = intval($this->form->z);
			getMessages()->addInfo('Parameters correct.');

			// Perform the operation
			$this->result->result = ($this->form->x * (($this->form->z / 100) / 12) * ((1 + (($this->form->z / 100) / 12)) ** ($this->form->y * 12))) / ((((1 + ($this->form->z / 12 / 100)) ** ($this->form->y * 12))) - 1);
			// Round to 2 decimal places
			$this->result->result = number_format($this->result->result, 2, '.', '');

			getMessages()->addInfo('Calculations performed.');
		}

		$this->generateView();
	}

	public function action_calcShow()
	{
		getMessages()->addInfo('Welcome to the simple loan calculator');
		$this->generateView();
	}

	/**
	 * Generate the view
	 */
	public function generateView()
	{

		getSmarty()->assign('user', unserialize($_SESSION['user']));

		getSmarty()->assign('page_title', 'Roles Calculator');

		getSmarty()->assign('form', $this->form);
		getSmarty()->assign('res', $this->result);
		getSmarty()->assign('page_description', 'Calculator for your free using :)');

		getSmarty()->display('CalcView.tpl');
	}
}
