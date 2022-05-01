<?php

declare(strict_types=1);

namespace App\Solucao;

final class CalculadoraDeJuros
{
    private CalculaJurosStrategyInterface $calculadorDeJuros;

    // ================================
    public function __construct(CalculaJurosStrategyInterface $calculadorDeJuros)
    {
        $this->calculadorDeJuros = $calculadorDeJuros;
    }

    // ================================
    public function calculaJuros(Pedido $pedido)
    {
        return $this->calculadorDeJuros->getTaxaDeJuros($pedido);
    }
}
//class
