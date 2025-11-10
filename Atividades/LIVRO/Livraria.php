<?php
/*
Atividade 02
Classe Livro
 
Entidade: Livro
Atributos:
Titulo
Autor
ISBN (Número de identificação do livro)
Genero (Ex: Ficção Científica, Romance, Técnico, Biografia)
Ação: Desenvolver a classe e criar um "catálogo" de livros (uma lista ou array de objetos Livro). Depois, exibir na tela o Título e o Autor de cada livro.
*/

class Livraria
{

    public $titulo;
    public $autor;
    private $isbn;
    public $genero;

    public function __construct($titulo, $autor, $isbn, $genero)

    {

        $this->titulo = $titulo;

        $this->autor = $autor;

        $this->isbn = $isbn;

        $this->genero = $genero;
    }

    function mostrar()
    {
        echo "<h3>Título: {$this->titulo}</h3>";
        echo "<p>Autor: {$this->autor}</p><hr>";
        /*echo "Titulo {$this->isbn}";
        echo "Titulo {$this->genero} <br>";*/
    }
}



$catalogo  = [
    new Livraria("<h2>Dom Casmurro", "Machado de Assis", "123456", "Romance</h2>"),
    new Livraria("<h2>é assim que acaba", "Coleen Hoover", "245456", "Romance</h2>"),
    new Livraria(" <h2>Ayrton senna: uma lenda a toda velocidade ", "Claudio Bank", "123478", "Bibliografia</h2>")

];


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atividades Extras </title>

<link rel="stylesheet" href="style.css">


</head>



<body>
    <h1>Catálogo de Livros</h1>

    <form method="post">
        <button type="submit" name="mostrar">Mostrar</button>

    </form>
    <?php

    /*echo" <h1>LIVROS </h1>";*/

    if ($_SERVER["REQUEST_METHOD"] == "POST"   && isset($_REQUEST['mostrar'])) {
        foreach ($catalogo  as $Livraria) {
            /*echo" <h1>LIvros </h1>";*/
            $Livraria->mostrar();
        }
    }

    ?>

</body>

</html>



<?php

