 
 
 
 
 <?php /*Desenvolva um site para uma imobiliária com conexão com o banco de dados. Esse site deverá cadastrar o cliente e o imóvel que será divulgado no site. Você deverá desenvolver o banco de dados com as informações do cliente e do imóvel. Desenvolva os formulários com os seguintes campos:
Formulário Cliente:
Nome;
CPF;
Endereço;
Cidade;
Bairro;
Formulário imóvel:
Tipo de imóvel (Casa, apartamento, Terreno, Kit, etc...)
Finalidade(venda, aluguel);
Localização;
Área construída;
Área do terreno;
Quantidade de quartos;
Quantidade de banheiros;
Quantidade de vagas de garagem;
Descrição
*/

$host = "localhost"; 
$banco = "imobiliaria";
$usuario = "root";
$senha = "";

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8" ,$usuario, $senha);
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo 'conexao bem sucedida ';
}

catch(PDOException $e)      
 {
 echo "Erro ao conectar: " . $e->getMessage();

    
    ;}


?>

