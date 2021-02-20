<?php


namespace jodfedlet\buscar_cep\ws;


class ViaCep
{
    const URL = 'https://viacep.com.br/ws/';

    public function get(string $zipCode) : array
    {
        $result = file_get_contents(self::URL.$zipCode.'/json');
        return json_decode($result, true);
    }
}