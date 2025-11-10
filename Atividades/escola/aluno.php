<?php
require_once 'Pessoa.php'; // Importa a classe Pessoa, que é a classe base (pai)

// Classe Aluno que herda (recebe) atributos e métodos da classe Pessoa
class Aluno extends Pessoa {
    private $curso; // Atributo exclusivo da classe Aluno (nome do curso que ele faz)

    // Construtor: executa automaticamente quando o objeto Aluno é criado
    public function __construct($nome, $idade, $curso) {
        parent::__construct($nome, $idade); // Chama o construtor da classe Pai (Pessoa)
        $this->curso = $curso;              // Define o valor do curso para o aluno
    }

    // Método que sobrescreve o método apresentar() da classe Pessoa (polimorfismo)
    public function apresentar() {
        // Usa o método apresentar() da classe Pai e adiciona a informação do curso
        return parent::apresentar() . " Sou aluno do curso de {$this->curso}.";
    }
}
?>
