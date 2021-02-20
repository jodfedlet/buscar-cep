<?php

namespace jodfedlet\buscar_cep;

use jodfedlet\buscar_cep\ws\ViaCep;

class Search
{
    final function getAddressWithZipCode(string $zipCode) : array
    {
        $zipCode = preg_replace("/[^0-9]/", "",$zipCode);
        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode) : array
    {
        $viaCep = new ViaCep();
        return $viaCep->get($zipCode);
    }
}
