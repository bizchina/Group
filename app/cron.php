<?php

define('__ROOT__', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "../");

require __DIR__.'/../vendor/group/group-framework/core/Group/Cron/Cron.php';

$cron = new Cron();
$cron -> run();
