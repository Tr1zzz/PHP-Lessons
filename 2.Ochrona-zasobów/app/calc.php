<?php
require_once dirname(__FILE__) . '/../config.php';


include _ROOT_PATH . '/app/security/check.php';

// Assuming user role is stored in session variable like $_SESSION['role']
// Default to 'user' if not set
$userRole = isset($_SESSION['role']) ? $_SESSION['role'] : 'user';
$isAdmin = ($userRole === 'admin'); // Check if the user is an admin

function getParams(&$amount, &$years, &$interestRate)
{
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interestRate = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;
}

function validate(&$amount, &$years, &$interestRate, &$messages, $isAdmin)
{
	if (!isset($amount) || !isset($years) || !isset($interestRate)) {
		return false;
	}
	if (!is_numeric($amount)) {
		$messages[] = 'The loan amount must be a number.';
	} elseif ($amount > 100000 && !$isAdmin) {
		$messages[] = 'As a regular user, you can select a loan amount up to $100,000.';
	}
	if (!is_numeric($years) || $years <= 0) {
		$messages[] = 'The loan term must be a positive number.';
	}
	if (!is_numeric($interestRate) || $interestRate <= 0) {
		$messages[] = 'The interest rate must be a positive number.';
	}
	if (count($messages)) return false;
	else return true;
}

function process(&$amount, &$years, &$interestRate, &$messages, &$result)
{
	$monthlyInterestRate = $interestRate / 12 / 100;
	$numberOfPayments = $years * 12;
	$result = $amount * $monthlyInterestRate / (1 - pow((1 + $monthlyInterestRate), -$numberOfPayments));
}

$amount = null;
$years = null;
$interestRate = null;
$result = null;
$messages = array();

getParams($amount, $years, $interestRate);
if (validate($amount, $years, $interestRate, $messages, $isAdmin)) {
	process($amount, $years, $interestRate, $messages, $result);
}

include 'calc_view.php';
