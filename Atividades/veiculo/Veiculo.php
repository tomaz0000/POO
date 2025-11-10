<?php

  abstract class Veiculo
{

    public $marca;
    public $modelo;
    public $precodiaria;
    public $disponivel;


    public function __construct($marca, $modelo, $precodiaria, $disponivel = true)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precodiaria = $precodiaria;
        $this->disponivel = $disponivel;
    }


    public function pegarDescricao()
    {

        return   "{$this->marca} {$this->modelo}";
    }

    public function alugar()
    {
        return $this->disponivel = false;
    }
    public function devolver()      {   return $this->disponivel = true; }


    public function pegadiaria ()  {   return $this->precodiaria; }



public function verificarstatus() {return $this->disponivel ? "disponivel" :"Indisponivel" ;}

abstract public  function calcularcusto($dias);
}

?>