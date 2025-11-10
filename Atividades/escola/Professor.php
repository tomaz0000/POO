<?php
require_once 'Pessoa.php'; // Importa a classe Pessoa, para poder herdar dela

// Classe filha (herda atributos e métodos da classe Pessoa)
class Professor extends Pessoa {
    private $disciplina; // Atributo específico do professor (matéria que ele ensina)

    // Construtor: é executado ao criar um novo professor
    public function __construct($nome, $idade, $disciplina) {
        /*O parent:: serve para acessar algo da classe pai (a classe que foi herdada) dentro de uma classe filha.,ele pode ser reaproveitado se a vlasse for abstrata e publica*/
        parent::__construct($nome, $idade); // Chama o construtor da classe Pai (Pessoa)
        $this->disciplina = $disciplina;    // Define o valor da disciplina para o professor
    }

    // Método que sobrescreve o método apresentar() da classe Pai (polimorfismo)
    public function apresentar() {
        // Usa o método apresentar() da classe Pai e adiciona a informação da disciplina
        return parent::apresentar() . " Leciono a disciplina de {$this->disciplina}.";
    }
}
?>
