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

$search = new Search();
$res = $search->getAddressWithZipCode(89809750);

print_r($res);
```

Deve imprimir o seguinte resultado:

```

```

## Como contribuir
Para contribuir na evolução desse projeto, é preciso:
- Fazer um Fork do repositório
- Fazer a alteração necessária
- Abre um Pull Request (PR).
- Aguarde a validação do PR. 
