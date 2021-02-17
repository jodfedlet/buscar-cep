<?php

require_once 'vendor/autoload.php';

use \jodfedlet\buscar_cep\Search;

$search = new Search();

$res = $search->getAddressWithZipCode(89809750);

print_r($res);

