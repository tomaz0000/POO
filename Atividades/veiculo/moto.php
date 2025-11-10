<?php
require_once 'Veiculo.php';

class Moto extends Veiculo {
     private $cilindradas ;

public function __construct($marca, $modelo, $precodiaria,$cilindradas, $disponivel = true)
{    parent::__construct($marca,$modelo,$precodiaria,$disponivel);
    $this->cilindradas = $cilindradas;
}


public function calcularcusto($dias)
{/**FUNÇÃO QUE VAI SOMAR A QUANTIDAE DE DIAS Da moto ALUGADa E VAI  CALCULAR O PRECO ,RETORNANDO A VARIAVEL TOTAL E APLICANDO A TAXA  */
$total = $this->precodiaria + $dias;
return $total * 1.05; 
}

}
?>