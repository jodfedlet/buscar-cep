<?php

require_once 'vendor/autoload.php';

use \jodfedlet\buscar_cep\Search;

try{
    $search = new Search();
    $res = $search->getAddressWithZipCode("59622-210"); //or "59622210"
    print_r($res);
} catch(Exception $exception) {
    print($exception->getMessage());
    exit;
}


