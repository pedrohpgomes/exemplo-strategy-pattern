<?php

declare(strict_types=1);

namespace App\Problema;

use App\Problema\Bancos\Bradesco;
use App\Problema\Bancos\Itau;
use App\Problema\Bancos\Santander;
use App\Problema\Pedido;

final class CalculadoraDeJuros
{
    // ======================================
    public function calculaJuros(Pedido $pedido): float
    {
        if ($pedido->getBanco() == 'Santander') {
            $banco = new Santander($pedido);
        } elseif ($pedido->getBanco() == 'Itau') {
            $banco = new Itau($pedido);
        } elseif ($pedido->getBanco() == 'Bradesco') {
            $banco = new Bradesco($pedido);
        }

        return $banco->getTaxaDeJuros();
    }
}
//class
