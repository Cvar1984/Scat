<?php

require './vendor/autoload.php';

$host = '127.0.0.1';
$port = 40141;

$server = new \Cvar1984\Scat\Client($host, $port);
echo $server->sendMessage('Hello');
