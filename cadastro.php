<?php 
   // CONECTANDO COM O BANCO DE DADOS
    $dbname = "projeto"; 
	$dbhost = "localhost"; 
	$dbuser = "root"; 
    $dbpass = "123"; 
    
    $pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);
	
    // VARIÁVEL QUE REPRESENTA UM CAMPO DA TABELA:
    $cadastro = $_REQUEST['cadastro'];

    // INSERINDO DADOS NO BANCO DE DADOS
	$pdo->query("INSERT INTO `cadastro` (cadastro) VALUES ('$cadastro')");
    

    echo "dados salvos com sucesso";

    // REDIRENCIONANDO PARA URL ....
    header("Location: index.php")
?>    
