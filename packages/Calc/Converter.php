<?php

namespace Calc;

/**
 * This is the heart of the application.
 * Convert any amount from one currency to another currency.
 * 
 */

class Converter
{
	
	function __construct()
	{
		
	}

	public static function convert($from_currency, $from_amount, $to_currency) 
	{
		$curr_from = $_GET['currency_from'];
		$amt_from = $_GET['amount_from'];
		$curr_from_rate = 550.00;

		$curr_to = $_GET['currency_to'];

		$amt_to = $amt_from * $curr_from_rate;
	}

	private function getRelativeExRate() 
	{

	}

}

?>