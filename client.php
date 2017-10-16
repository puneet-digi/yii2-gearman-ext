<?php

$client = new GearmanClient();
$client->addServer();
$string = 'My name is puneet';
echo $client->do('reverse', $string);
