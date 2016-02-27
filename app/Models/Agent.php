<?php 

namespace app\Models;

class Agent extends Model {
	
	private $name;
	private $code;
	private $address;
	private $city;
	private $country;

	function __construct() {

		parent::__construct();
	}

	/**
	 * Create a new Agent in the database
	 */
	function createAgent() {

	}

	/**
	 * Delete an Agent from the database
	 */
	function deleteAgent() {
		
	}

	/**
	 * Update an Agent in the database
	 */
	function updateAgent() {
		
	}

	/**
	 * Retrieve an Agent from the database
	 */
	function getAgent() {	

		$agent["name"] = "Access FXB";
		$agent["code"] = "ACCFXB";
		$agent["address"] = "G Floor, Krish Mall, Bugolobi";
		$agent["city"] = "Kampala";
		$agent["country"] = "UG";

		return $agent;
	}

	/**
	 * Display raw Agent data
	 */
	function display() {

		list($name, $code, $address, $city, $country) = getAgent();

		printf("Name: %s \nCode: %s \nCity: %s", $name, $code, $city);
	}
}
