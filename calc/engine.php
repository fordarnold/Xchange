<?php

/* Convert */

$curr_from = $_GET['currency_from'];
$amt_from = $_GET['amount_from'];
$curr_from_rate = 550.00;

$curr_to = $_GET['currency_to'];

$amt_to = $amt_from * $curr_from_rate;

?>