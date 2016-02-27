<?php

namespace app\Models;

class Currency extends Model{
	
	private $name;
	private $symbol;
	private $country;

	/* Is Currency activated for this Agent ? */
	private $_activated;

	function __construct() {

		parent::__construct();
	}

	/**
	 * Create a new Currency in the database
	 */
	function createCurrency() {

	}

	/**
	 * Delete an Currency from the database
	 */
	function deleteCurrency() {
		
	}

	/**
	 * Update an Currency in the database
	 */
	function updateCurrency() {
		
	}

	/**
	 * Retrieve an Currency from the database
	 */
	function getCurrency() {	
		
	}

	/**
	 * Display raw Currency data
	 */
	function display() {
		
	}
}
