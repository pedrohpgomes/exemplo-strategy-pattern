<?php

declare(strict_types=1);

namespace App\Solucao;

final class Pedido
{
    private float $total;


    // ========================================
    public function __construct(float $total)
    {
        $this->total = $total;
    }

    // ========================================
    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

    // ========================================
    /**
     * Set the value of total
     *
     * @return  self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}
//class
