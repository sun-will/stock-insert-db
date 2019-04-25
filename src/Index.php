<?php

require __DIR__ . '/../vendor/autoload.php';

use Will\Application;

$isTest = false;
foreach($argv as $value)
{
  if ($value == 'test') {
  	$isTest = true;
  }
}

$application = new Application();
$application->run($isTest);
