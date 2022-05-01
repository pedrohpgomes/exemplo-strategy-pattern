<?php

declare(strict_types=1);

namespace App\Problema\Bancos;

use App\Problema\Pedido;

final class Bradesco
{
    private $pedido;

    // ===============================
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    // ===============================
    public function getTaxaDeJuros(): float
    {
        return 22.5;
    }
}
//class
