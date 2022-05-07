<?php
require 'vendor/autoload.php';
date_default_timezone_set("Asia/Kolkata");

$user = new stdClass();
$user->print=1;
$user->name="rajkumar";

require __DIR__ . "/invoice.php";