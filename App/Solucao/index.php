<?php

require_once 'Bancos/Bradesco.php';
require_once 'Bancos/Itau.php';
require_once 'Bancos/Santander.php';
require_once 'Pedido.php';
require_once 'CalculadoraDeJuros.php';
require_once 'CalculaJurosStrategyInterface.php';

use App\Solucao\Bancos\Bradesco;
use App\Solucao\Bancos\Itau;
use App\Solucao\Bancos\Santander;
use App\Solucao\CalculadoraDeJuros;
use App\Solucao\Pedido;

$pedido = new Pedido(total: 10);
$banco = new Santander();
$calculadora = new CalculadoraDeJuros($banco);
$juros = $calculadora->calculaJuros($pedido);
echo "Juros do banco {$banco->getNome()}: $juros%";
