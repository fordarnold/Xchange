<?php

/**
 * Loads all necessary PHP files/modules/classes/dependencies into the app
 *
 */

// import app configurations
require ("config.php");

// var_dump(PATH . "/packages/import.php"); exit();

// import dependencies (PHP packages)
require (PATH . "/packages/import.php");

// import app-specific classes
require (PATH . "/app/Models/Agent.php");
require (PATH . "/app/Models/Country.php");
require (PATH . "/app/Models/Currency.php");
