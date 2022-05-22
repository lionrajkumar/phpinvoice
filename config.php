<?php
require 'vendor/autoload.php';
date_default_timezone_set("Asia/Kolkata");

$env = new \lionrajkumar\DotEnv(__DIR__ . "/.env");
$env->load();

define("HOME_PAGE","dashboard");