<?php

namespace jodfedlet\buscar_cep;

use Exception;
use InvalidArgumentException;
use jodfedlet\buscar_cep\ws\ViaCep;

class Search
{
    const CEP_LENGTH = 8;
    final function getAddressWithZipCode(string $zipCode) 
    {
        try{
            $zipCode = $this->cleanAndValidateZipCode($zipCode);
            return $this->getFromServer($zipCode);
        }catch(Exception $exception){
           throw new InvalidArgumentException("Invalid parameter -->".$exception->getMessage());
        }
    }

    private function validateZipCode(string $zipCode)
    {  
      if (strlen($zipCode) != self::CEP_LENGTH) {
        throw new InvalidArgumentException("Invalid CEP, please retry");
      }
      return $zipCode;
    }

    private function cleanAndValidateZipCode(string $zipCode): string
    {    
      $zipCode = preg_replace("/[^0-9]/", "",str_replace("-","",$zipCode));
      return $this->validateZipCode($zipCode);
    }

    private function getFromServer(string $zipCode)
    {
        $viaCep = new ViaCep();
        return $viaCep->get($zipCode);
    }
}
