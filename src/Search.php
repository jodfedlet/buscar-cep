<?php

namespace jodfedlet\buscar_cep;

class Search
{
    const URL = 'https://viacep.com.br/ws/';

    public function getAddressWithZipCode(string $zipCode) : array
    {
        $zipCode = preg_replace("/[^0-9]/", "",$zipCode);

        $result = file_get_contents(self::URL.$zipCode.'/json');
        return json_decode($result, true);
    }
}
