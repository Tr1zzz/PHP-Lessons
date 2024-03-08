<?php
// Контроллер калькулятора кредитного
require_once dirname(__FILE__) . '/../config.php';

$amount = $_REQUEST['amount'];
$years = $_REQUEST['years'];
$interest = $_REQUEST['interest'];

$messages = [];

if (!isset($amount, $years, $interest)) {
	$messages[] = 'Błędne wywołanie aplikacji. Brak jedного z parametrów.';
}

if (empty($messages)) {
	$amount = floatval($amount);
	$years = intval($years);
	$interest = floatval($interest) / 100;
	$monthlyInterest = $interest / 12;
	$n = $years * 12;

	if ($monthlyInterest > 0) {
		$monthlyPayment = $amount * ($monthlyInterest / (1 - pow(1 + $monthlyInterest, -$n)));
	} else {
		$monthlyPayment = $amount / $n;
	}

	$result = round($monthlyPayment, 2);
}

include 'calc_view.php';
