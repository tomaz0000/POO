<?php

class Funcionario
{

    public $nome;
    public $cargo;
    public $departamento;
    private $salario;


 public   function __construct($nome,$salario,$cargo,$departamento)

{$this->nome = $nome ;
    $this->cargo = $cargo; 
$this->salario = $salario;
$this->departamento = $departamento;
}


public function mostrarDados(){
 echo "<h2>Dados do Funcionario</h2>";
 echo "<h2> Nome:  {$this->nome}<br>";
echo " Cargo:  {$this->cargo}<br>";
echo " Departamento:  {$this->departamento}<br>";
echo " Seu salario é :  <br>"  . number_format($this->salario, 2, ',','.' ) /*number_format(this->salario,2,)*/;
 
}   }

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$Funcionario = new Funcionario(
    $_POST['nome'],
 $_POST['salario'],
 $_POST['cargo'],
 $_POST['departamento']
 );

}

/*Boa noite a todos SAN - UC 4 - Codificar Back-End de aplicações web. - 9900321100 - 0010 - 09176. COmo não teremos aula na sexta e quem quiser utilizar esse tempo para treinar segue em anexo mais atividades:
Atividade 01
Classe Funcionário
 
Entidade: Funcionario
Atributos:
Nome
Departamento (Ex: Vendas, RH, TI, Financeiro)
Cargo (Ex: Analista, Gerente, Estagiário, Coordenador)
Salario (Use um tipo numérico para valores monetários)
Ação: Desenvolver a classe e instanciar alguns objetos, depois mostre as informações do funcionário na tela.

Atividade 02
Classe Livro
 
Entidade: Livro
Atributos:
Titulo
Autor
ISBN (Número de identificação do livro)
Genero (Ex: Ficção Científica, Romance, Técnico, Biografia)
Ação: Desenvolver a classe e criar um "catálogo" de livros (uma lista ou array de objetos Livro). Depois, exibir na tela o Título e o Autor de cada livro.

Atividade 03
Classe Imovel
 
Entidade: Imovel
Atributos:
Tipo (Ex: Apartamento, Casa, Terreno)
Endereco
AreaMetrosQuadrados (Use um tipo numérico)
NumeroQuartos (Use um tipo numérico inteiro)
Ação: Desenvolver a classe. Crie um objeto Imovel e exiba na tela o tipo de imóvel, seu endereço e o número de quartos.

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<h1>    escolha seu cargo</h1>

Nome: <input type="text" name="nome" required><br><br>
        Salario: <input type="number" name="salario" required><br><br>
        
<h2><select name="cargo" >

<option value=" ">selecione</option>
<option >Analista</option>
<option >Gerente</option>
<option >Estagiario</option>
<option >Coordenador </option>
</select><br></h2>

<h2><select name="departamento" >

<option value=" ">selecione</option>
<option >Vendas</option>
<option >RH</option>
<option >TI</option>
<option >Financeiro </option>
</select><br></h2>




<button type="submit">Enviar</button>
</form>

<?php if(isset($Funcionario)) {

    $Funcionario->mostrarDados();

}
?>
</body>
</html>