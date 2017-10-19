#!/usr/bin/env php
<?php require_once __DIR__ . '/vendor/autoload.php';

use Xtuple\Xdruple\Application\Console\DrupalConsoleApplication;

try {
  $appDirectory = getcwd();
  $console = new DrupalConsoleApplication($appDirectory, "$appDirectory/drupal/core");
  $console->run();
}
catch (\Exception $e) {
  if ($e->getMessage()) {
    echo strtr("Error: {message}\n", [
      '{message}' => $e->getMessage(),
    ]);
  }
  echo $e->getTraceAsString();
  echo "\n";
  exit();
}
