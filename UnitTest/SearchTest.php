<?php

use \PHPUnit\Framework\TestCase;
use jodfedlet\buscar_cep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dataTest
     */
    public function testGetAddressWithZipCode(string $input, array $expected)
    {
        $result = new Search();
        $res = $result->getAddressWithZipCode($input);

        $this->assertNotEmpty($res);
        $this->assertTrue(is_array($res));
        $this->assertEquals($expected,$res);
    }

    public function dataTest()
    {
        return [
            "Nossa localidade"=> [
                "89809750",
                [
                    'cep' => '89809-750',
                    'logradouro' => 'Rua Inambu',
                    'complemento' =>'',
                    'bairro' => 'Efapi',
                    'localidade' => 'Chapecó',
                    'uf' => 'SC',
                    'ibge' => '4204202',
                    'gia' =>'',
                    'ddd' => '49',
                    'siafi' => '8081'
                ]
            ],

            "Outra localidade"=> [
                 "89809510",
                [
                    'cep' => '89809-510',
                    'logradouro' => 'Rua Coronel Freitas - E',
                    'complemento' =>'',
                    'bairro' => 'Efapi',
                    'localidade' => 'Chapecó',
                    'uf' => 'SC',
                    'ibge' => '4204202',
                    'gia' =>'',
                    'ddd' => '49',
                    'siafi' => '8081'
                ]
            ]
        ];
    }
}