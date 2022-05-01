<?php

require_once 'Bancos/Bradesco.php';
require_once 'Bancos/Itau.php';
require_once 'Bancos/Santander.php';
require_once 'Pedido.php';
require_once 'CalculadoraDeJuros.php';

use App\Problema\CalculadoraDeJuros;
use App\Problema\Pedido;

$pedido = new Pedido(total: 10, banco: 'Santander');
$calculadora = new CalculadoraDeJuros();
echo $calculadora->calculaJuros($pedido);
