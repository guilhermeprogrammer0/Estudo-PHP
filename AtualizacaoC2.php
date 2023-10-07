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
 <center> <label> <h1 class="display-6">Alteraração de clientes cadastrados</h1>     </label></br>    </center>
 <form action="AtualizacaoC3.php" method="POST" id="form2" name="form2">
<?php
error_reporting(0);
$codcliente = $_POST['codcliente'];
$conexao = mysqli_connect("localhost","root","","aula");
$sql = "select * from clientes where codcliente =$codcliente";
$resultado = mysqli_query($conexao,$sql) or die(mysqli_error());
$numrow = mysqli_num_rows($resultado);
 if($numrow>0)
 {
	 while($linha = mysqli_fetch_array($resultado))
	 {
		?> 
		 <table class="table">
		<tr>
      
      <th scope="col">Código</th>
      <th scope="col"><input type="text" name="codcliente" class="form-control"  id="codcliente" readonly="readonly" value="<?php echo $linha["codcliente"]; ?>"/></th>

    </tr>
	<tr>
      
      <th scope="col">Nome</th>
      <th scope="col"><input type="text" name="nome" class="form-control"  id="nome"  value="<?php echo $linha["nome"]; ?>"/></th>

    </tr>
		<tr>
      
      <th scope="col">Data Nascimento</th>
      <th scope="col"><input type="date" name="data_nasc" class="form-control"  id="data_nasc" value="<?php echo $linha["data_nasc"]; ?>"/></th>

    </tr>
		<tr>
      
      <th scope="col">Celular</th>
      <th scope="col"><input type="text" name="celular" class="form-control"  id="celular"  value="<?php echo $linha["celular"]; ?>"/></th>

    </tr>
		<tr>
      
      <th scope="col">E-mail</th>
      <th scope="col"><input type="text" name="email" class="form-control"  id="nome"  value="<?php echo $linha["nome"]; ?>"/></th>

    </tr>

		<tr>
      
      <th scope="col">Rua</th>
      <th scope="col"><input type="text" name="rua" class="form-control"  id="rua"  value="<?php echo $linha["rua"]; ?>"/></th>

    </tr>

		<tr>
      
      <th scope="col">Número</th>
      <th scope="col"><input type="text" name="numero" class="form-control"  id="numero"  value="<?php echo $linha["numero"]; ?>"/></th>

    </tr>
	<tr>
      
      <th scope="col">Bairro</th>
      <th scope="col"><input type="text" name="bairro" class="form-control"  id="bairro"  value="<?php echo $linha["bairro"]; ?>"/></th>

    </tr>

	<tr>
      
      <th scope="col">CEP</th>
      <th scope="col"><input type="text" name="cep" class="form-control"  id="cep"  value="<?php echo $linha["cep"]; ?>"/></th>

    </tr>

	<tr>
      
      <th scope="col">Cidade</th>
      <th scope="col"><input type="text" name="cidade" class="form-control"  id="cidade"  value="<?php echo $linha["cidade"]; ?>"/></th>

    </tr>

	<tr>
      
      <th scope="col">Estado</th>
      <th scope="col"><input type="text" name="estado" class="form-control"  id="estado" value="<?php echo $linha["estado"]; ?>"/></th>
    </tr>


</table>
	 
	 <p> </p>
	 
	 
	 <input type="submit" name="button" id="button" value="Alterar" class="btn btn-danger"  />
 </label>
 <p> </p>
	 
	 
	 <?php }
 }
else
{?>
<div class="container ">
  <div class="card mt-3">
     <div class="card-body">
	 <?php
 echo "<center><B><font color=#1C1C1C size=5> Cliente Não existe! </font></center>";

}



?>
</div>
</div>
</div>

















</form>






</body>
</html>