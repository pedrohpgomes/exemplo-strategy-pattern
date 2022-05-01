<?php

declare(strict_types=1);

namespace App\Problema;

final class Pedido
{
    private float $total;

    private string $banco;

    // ========================================
    public function __construct(float $total, string $banco)
    {
        $this->total = $total;
        $this->banco = $banco;
    }

    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

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

    /**
     * Get the value of banco
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set the value of banco
     *
     * @return  self
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }
}
//class
