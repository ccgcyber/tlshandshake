<?php

require_once __DIR__ . '/vendor/autoload.php';

require('./src/Handshake.php');

$hs = new Handshake();
$hs->scanHost();


?>