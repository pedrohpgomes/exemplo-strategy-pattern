<?php

declare(strict_types=1);

namespace App\Solucao\Bancos;

require_once 'CalculaJurosStrategyInterface.php';

use App\Solucao\Pedido;
use App\Solucao\CalculaJurosStrategyInterface;

final class Bradesco implements CalculaJurosStrategyInterface
{
    private string $nome = 'Bradesco';

    // ===============================
    public function getTaxaDeJuros(Pedido $pedido): float
    {
        return 22.5;
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
