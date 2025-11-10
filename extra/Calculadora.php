<?php

class Calculadora
{
    private $valor1;
    private $valor2;

    // Método construtor
    public function __construct($valor1, $valor2)
    {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }

    public function somar()//nao é 
    {
        return $this->valor1 + $this->valor2;
    }

    public function subtrair()
    {
        return $this->valor1 - $this->valor2;
    }

    public function multiplicar()
    {
        return $this->valor1 * $this->valor2;
    }

    public function dividir()
    {
        if ($this->valor2 == 0) {
            return "Erro: divisão por zero";
        }
        return $this->valor1 / $this->valor2;
    }
}
