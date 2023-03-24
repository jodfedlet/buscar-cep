# buscar-cep
Buscar os dados de endereço a partir de um CEP.

## Como Usar

Para o uso no seu projeto, é preciso:

1. Ter o php >= 7.4 instalado no seu servidor;
2. Instalar  a dependência via composer

```
$ composer require jodfedlet/buscar_cep
```

Exemplo de uso:

```
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
```

Deve imprimir o seguinte resultado:

```
Array
(
    [cep] => 59622-210
    [logradouro] => Rua José Lopes da Fé
    [complemento] => 
    [bairro] => Santo Antônio
    [localidade] => Mossoró
    [uf] => RN
    [ibge] => 2408003
    [gia] => 
    [ddd] => 84
    [siafi] => 1759
)
```

## Como contribuir
Para contribuir na evolução desse projeto, é preciso:
- Fazer um Fork do repositório
- Fazer a alteração necessária
- Abre um Pull Request (PR).
- Aguarde a validação do PR. 
