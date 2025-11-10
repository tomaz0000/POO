<?php require_once 'veiculo.php' ;




class carros     extends Veiculo {
    private $portas ;


public function  __construct( $portas,$marca, $modelo, $precodiaria, $disponivel = true){
parent::__construct($marca,$modelo,$precodiaria,$disponivel);
    $this->portas = $portas ;}



    public function calcularcusto($dias){
/**FUNÇÃO QUE VAI SOMAR A QUANTIDAE DE DIAS DO CARRO ALUGADO E VAI  CALCULAR O PRECO ,RETORNANDO A VARIAVEL TOTAL E APLICANDO A TAXA  */
        $total = $this->precodiaria + $dias;
        return $total * 1.10;

    }
}
?>