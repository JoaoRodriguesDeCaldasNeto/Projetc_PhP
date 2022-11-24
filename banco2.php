<?php 

   // CONECTANDO COM O BANCO DE DADOS
    $dbname = "projeto"; // nome do banco de dados
	$dbhost = "localhost"; // local onde está o banco de dados
	$dbuser = "root"; // nome do usuário do bando de dados
    $dbpass = ""; // senha do usuário do bando de dados

	$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

    $sql = $pdo->query("SELECT * FROM emails");

    if($sql->rowCount() > 0) {
        $emails = $sql->fetchAll(PDO::FETCH_ASSOC);
      }
	
?> 

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>CRUD</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Banco de Dados</a>
            
          </div>
</nav>

<table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Emails Cadastrados </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($emails as $perfil): ?>
    <tr>
      <td><?php echo $perfil['Emails'];?></td>
    </tr>
  <?php endforeach; ?> 
  </tbody>
</table>
  </body>
</html>
