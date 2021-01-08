<?php

$price = file_get_contents('price.json');

$json = json_decode($price, true);

print_r($json);

