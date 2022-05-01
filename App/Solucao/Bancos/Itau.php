<?php

declare(strict_types=1);

namespace App\Solucao\Bancos;

require_once 'CalculaJurosStrategyInterface.php';

use App\Solucao\CalculaJurosStrategyInterface;
use App\Solucao\Pedido;

final class Itau implements CalculaJurosStrategyInterface
{
    private string $nome = 'Itau';

    // ===============================
    public function getTaxaDeJuros(Pedido $pedido): float
    {
        return 15;
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
