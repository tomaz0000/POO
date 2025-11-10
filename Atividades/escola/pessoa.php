<?php
// Classe base (pai)
 abstract class Pessoa {
    /*cria a variavel nome que vai ser protegida ,ou seja ela nao poder ser usada em outro projeto */protected  string $nome;
    
   /*cria a variavel idade que vai ser tipo  inteiro pois nao vai ter meia idade e  que vai ser protegida ,ou seja ela nao poder ser usada em outro projeto */ protected  int $idade;

   /* cria a classe construtor , que vai ser executado quando um objeto for criado */
    public function __construct (string $nome, int $idade) {
      
        /*define os valores de cada atributo */ 
        $this->nome = $nome; // Atribui o valor recebido ($nome) ao atributo da classe ($this->nome)
        $this->idade = $idade; // Atribui o valor recebido ($idade) ao atributo da classe ($this->idade)
    }

    public function getNome() {
    return $this->nome; // Retorna o valor armazenado no atributo $nome
}

// Método público para retornar a idade
public function getIdade() {
    return $this->idade; // Retorna o valor armazenado no atributo $idade
}

// exibe uma mensagem com as informações da pessoa
public function apresentar() {
    // Retorna uma string com o nome e idade do objeto atual
    return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
}}