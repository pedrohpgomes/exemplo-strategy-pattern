<?php

declare(strict_types=1);

namespace App\Problema\Bancos;

use App\Problema\Pedido;

final class Santander
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
        return 10;
    }
}
//class
