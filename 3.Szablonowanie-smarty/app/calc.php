<?php
// CALCULATOR page controller
require_once dirname(__FILE__) . '/../config.php';
// Load Smarty
require_once _ROOT_PATH . '/lib/smarty/libs/Smarty.class.php';

// Retrieve parameters
function getParams(&$form)
{
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

// Validate parameters and prepare variables for the view
function validate(&$form, &$infos, &$msgs, &$hide_intro)
{
	// Check if parameters were passed - if not, end validation
	if (!(isset($form['x']) && isset($form['y']) && isset($form['z']))) return false;

	// Parameters passed, so
	// hide the intro part of the page when in calculation mode (to avoid scrolling)
	// - this variable will be used in the view to not display the entire intro block with background
	$hide_intro = true;

	$infos[] = 'Parameters passed.';

	// Check if required values are provided
	if ($form['x'] == "") $msgs[] = 'Need value 1';
	if ($form['y'] == "") $msgs[] = 'Need value 2';
	if ($form['z'] == "") $msgs[] = 'Need value 3';

	// No point in further validation if parameters are missing
	if (count($msgs) == 0) {
		// Check if $x, $y, and $z are numbers
		if (!is_numeric($form['x'])) $msgs[] = 'First value is not a number';
		if (!is_numeric($form['y'])) $msgs[] = 'Second value is not a number';
		if (!is_numeric($form['z'])) $msgs[] = 'Third value is not a number';
	}

	if (count($msgs) > 0) return false;
	else return true;
}

// Perform calculations
function process(&$form, &$infos, &$msgs, &$result)
{
	$infos[] = 'Parameters valid. Performing calculations.';

	// Convert parameters to float
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
	$form['z'] = floatval($form['z']);

	// Execute operation
	$operation = ($form['x'] * (($form['z'] / 100) / 12) * ((1 + (($form['z'] / 100) / 12)) ** ($form['y'] * 12))) / ((((1 + ($form['z'] / 12 / 100)) ** ($form['y'] * 12))) - 1);
	// Round to 2 decimal places
	$temp = $operation;
	$result = number_format($temp, 2, '.', '');
}

// Initialize variables
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if (validate($form, $infos, $messages, $hide_intro)) {
	process($form, $infos, $messages, $result);
}

// Prepare data for the template

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'SZABLANOWANIE_SMARTY');
$smarty->assign('page_description', 'Professional templating with Smarty library');
$smarty->assign('page_header', 'Smarty Templates');

$smarty->assign('hide_intro', $hide_intro);

// Other variables may not necessarily exist, so check to avoid warnings
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

// Invoke the template
$smarty->display(_ROOT_PATH . '/app/calc.html');
