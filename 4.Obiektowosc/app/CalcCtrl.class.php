<?php
// In the controller definition script, there is no need to include the problematic config.php script,
// as it will be used in places where config.php is already called.

require_once $conf->root_path . '/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';


class CalcCtrl
{

	private $msgs;   //messages for the view
	private $form;   //form data (for calculations and for the view)
	private $result; //other data for the view
	private $hide_intro; //variable indicating whether to hide the intro

	/** 
	 * Constructor - initialization of properties
	 */
	public function __construct()
	{
		//creation of needed objects
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

	/** 
	 * Getting parameters
	 */
	public function getParams()
	{
		$this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
		$this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
		$this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
	}

	/** 
	 * Parameters validation
	 * @return true if no errors, false otherwise 
	 */
	public function validate()
	{
		// check if parameters have been passed
		if (!(isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
			// this situation occurs when, for example, the controller is called directly - not from a form
			return false; //end validation with an error
		} else {
			$this->hide_intro = true; //form fields have been passed, so - hide the intro
		}

		// check if required values have been passed
		if ($this->form->x == "") {
			$this->msgs->addError('Number 1 not specified');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Number 2 not specified');
		}
		if ($this->form->z == "") {
			$this->msgs->addError('Number 3 not specified');
		}

		// no point in further validation if parameters are missing
		if (!$this->msgs->isError()) {

			// check if $x and $y are integers
			if (!is_numeric($this->form->x)) {
				$this->msgs->addError('The first value is not an integer');
			}

			if (!is_numeric($this->form->y)) {
				$this->msgs->addError('The second value is not an integer');
			}
			if (!is_numeric($this->form->z)) {
				$this->msgs->addError('The third value is not an integer');
			}
		}
		return !$this->msgs->isError();
	}

	/** 
	 * Get values, validate, calculate and display
	 */
	public function process()
	{

		$this->getparams();

		if ($this->validate()) {

			//conversion of parameters to int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->z = intval($this->form->z);
			$this->msgs->addInfo('Parameters correct.');

			//performing the operation
			$this->result->result = ($this->form->x * (($this->form->z / 100) / 12) * ((1 + (($this->form->z / 100) / 12)) ** ($this->form->y * 12))) / ((((1 + ($this->form->z / 12 / 100)) ** ($this->form->y * 12))) - 1);
			//rounding to 2 decimal places
			$this->result->result = number_format($this->result->result, 2, '.', '');

			$this->msgs->addInfo('Calculations done.');
		}
		$this->generateView();
	}


	/**
	 * Generating the view
	 */
	public function generateView()
	{
		global $conf;

		$smarty = new Smarty();
		$smarty->assign('conf', $conf);

		$smarty->assign('page_title', 'Obiektowość');
		$smarty->assign('page_description', 'Object orientation. Full MVC model.');
		$smarty->assign('page_header', 'Objects in PHP');

		$smarty->assign('hide_intro', $this->hide_intro);

		$smarty->assign('msgs', $this->msgs);
		$smarty->assign('form', $this->form);
		$smarty->assign('res', $this->result);

		$smarty->display($conf->root_path . '/app/CalcView.html');
	}
}
