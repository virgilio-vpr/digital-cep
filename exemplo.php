<?php

require_once "vendor/autoload.php";

use digital_cep\DigitalCep\Src\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('03624010');

print_r($resultado);