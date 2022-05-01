<?php

namespace App\Solucao;

use App\Solucao\Pedido;

interface CalculaJurosStrategyInterface
{
    public function getTaxaDeJuros(Pedido $pedido);
}
//class
