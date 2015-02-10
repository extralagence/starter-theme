<?php
global $typeKitId;
$typeKitId = 'lxo0rnv';

$extraCronFolder = dirname(dirname(dirname(__FILE__))) . '/extra/cron/';

include_once $extraCronFolder . '/auto-update-typekit.php';
include_once $extraCronFolder . '/auto-update-ga.php';