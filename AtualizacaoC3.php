<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Clientes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="estilos.css" rel="stylesheet" type="text/css">
		   <link rel="sortcut icon" href="icon.png" type="image/x-icon" />
</head>


<body>

<div class="menu">
<div class="txtP"> Programmer Now </div>

<ul>
<li ><a href="Home.php"> Home </a>          </li>
<li ><a href="CadastroC.php"> Cadastro </a>          </li>
<li>  <a href="PesquisaC.php"> Pesquisa    </a>    </li>
<li>  <a href="PesquisaCN.php"> Pesquisa Nome   </a>    </li>
<li>  <a href="AtualizacaoC.php"> Atualização   </a>    </li>
<li>  <a href="ExclusaoC.php"> Exclusão  </a>    </li>
</ul>
</div>
<?php
error_reporting(0);
  $codcliente=$_POST["codcliente"];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

	$conexao = mysqli_connect("localhost","root","", "aula");
$sql = "update clientes set nome='$nome', data_nasc='$data_nasc', celular='$celular', email='$email', rua='$rua', numero='$numero', bairro='$bairro', cep='$cep', cidade='$cidade', estado='$estado' where codcliente =$codcliente";
$resultado = mysqli_query($conexao, $sql) or die( mysqli_error() );



	if ( $resultado )
		


		echo "<center><h1>Cliente alterado com sucesso !!!</h1> </center>";



	else
	
		

		
		echo " <center>Ocorreu o seguinte erro ao alterar:  </center>".$resultado;
	

?>



















</body>
</html>