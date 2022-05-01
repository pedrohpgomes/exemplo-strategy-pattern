<?php

declare(strict_types=1);

namespace App\Solucao\Bancos;

require_once 'CalculaJurosStrategyInterface.php';

use App\Solucao\CalculaJurosStrategyInterface;
use App\Solucao\Pedido;

final class Santander implements CalculaJurosStrategyInterface
{
    public string $nome = 'Santander';
    // ===============================
    public function getTaxaDeJuros(Pedido $pedido): float
    {
        return 10;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }
}
//class
