<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Clientes</title>
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
  $codcliente=$_POST["codcliente"];
	$conexao = mysqli_connect("localhost","root","", "aula");
	
		$sql = "SELECT codcliente FROM clientes WHERE codcliente='$codcliente'"; 
			$result = mysqli_query( $conexao,$sql) or die( mysqli_error() );
		$qtde_linha= mysqli_num_rows($result);
		
		if($qtde_linha>=1)
		{
		
		       $sql1 ="DELETE FROM clientes WHERE codcliente='$codcliente'";
       $result1 = mysqli_query( $conexao,$sql1) or die( mysqli_error() );
	   
	   if ( $result )
	   {
        echo "<center><B><font color=#1C1C1C size=8> Cliente excluido com sucesso! </font></center>";
		}
	else
	{
		echo "Ocorreu o seguinte erro ao excluir: ".$result;
		}
	
		}
		
		else
		{
            echo "<center><B><font color=#1C1C1C size=8> Cliente não cadastrado! </font></center>";
		}
		
?>
</body>
</html>