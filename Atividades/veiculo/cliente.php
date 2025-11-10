<?php
/*Desenvolver um sistema em PHP orientado a objetos para gerenciar veículos disponíveis para aluguel.
O sistema deve aplicar conceitos de herança, polimorfismo e abstração, além de exibir os dados em uma página estilizada.

🗂 Estrutura de pastas
/aluguel_carros ├── Veiculo.php ├── Carro.php ├── Moto.php ├── Cliente.php ├── index.php └── style.css
🧠 Descrição da Atividade
Você deverá criar um sistema simples que represente uma locadora de veículos.
O sistema deve armazenar e exibir informações sobre carros e motos disponíveis para aluguel, além de permitir simular o cálculo do valor total do aluguel de um veículo por um determinado número de dias.

O projeto não precisa usar banco de dados — apenas classes PHP e exibição de informações com HTML e CSS.

📘 Requisitos do Sistema
Crie uma classe abstrata Veiculo com os seguintes atributos e métodos:

Atributos:

marca

modelo

precoDiaria

disponivel (booleano)

Métodos:

__construct() para inicializar os dados;

getDescricao() para retornar marca e modelo juntos;

alugar() e devolver() para alterar o status do veículo;

Um método abstrato calcularCusto($dias) que deve ser implementado pelas subclasses.

Crie duas subclasses que herdem de Veiculo:

Carro → deve ter um atributo adicional portas;

Moto → deve ter um atributo adicional cilindradas;

Ambas devem implementar o método calcularCusto($dias), aplicando uma taxa diferente:

Carros: +10% de taxa sobre o total

Motos: +5% de taxa sobre o total

Crie uma classe Cliente com atributos nome e cpf.

Na página principal (index.php):

Crie alguns objetos de Carro e Moto;

Crie um objeto de Cliente;

Exiba todos os veículos em uma tabela HTML, com as seguintes colunas:

Tipo (Carro/Moto)

Descrição (marca e modelo)

Preço da diária

Status (Disponível / Alugado)

Exemplo de cálculo: valor total para 3 dias

Aplique um estilo com CSS (cores, fonte, tabela estilizada, layout centralizado).

*/

class Cliente {

public $nome;
public $cpf;

public function __construct($nome,$cpf){$this->nome = $nome; $this->cpf = $cpf;}
}







