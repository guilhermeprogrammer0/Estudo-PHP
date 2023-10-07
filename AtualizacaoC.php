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

require_once "conexao.php";
$sql = "select * from clientes";
$resultado = mysqli_query($conexao,$sql);
?>
   <center> <label> <h1 class="display-6">Clientes cadastrados</h1>     </label></br>    </center>
<table class="table table-dark table-hover" width="491" border="1">
<tr>
 <th> Código  </th>
 <th> Nome  </th>
 <th>  Data Nascimento </th>
 <th> Celular  </th>
 <th> E-mail  </th>
 <th>  Rua </th>
 <th>  Número </th>
 <th> Bairro  </th>
 <th> Cep  </th>
 <th>  Cidade </th>
 <th>  Estado </th>




</tr>
<?php
while ($linha=mysqli_fetch_array($resultado))
{

?>
<tr>
<td><?php echo $linha["codcliente"] ; ?>       </td>
<td><?php echo $linha["nome"];?>        </td>
<td><?php echo $linha["data_nasc"];?>        </td>
<td><?php echo $linha["celular"];?>        </td>
<td><?php echo $linha["email"];?>       </td>
<td><?php echo $linha["rua"];?>        </td>
<td><?php echo $linha["numero"];?>        </td>
<td><?php echo $linha["bairro"];?>        </td>
<td><?php echo $linha["cep"];?>        </td>
<td><?php echo $linha["cidade"];?>        </td>
<td><?php echo $linha["estado"];?>       </td>
<?php } ?>
</tr>
</table>
   <center> <label> <h1 class="display-6">Alterar clientes cadastrados</h1>     </label></br>    </center>
   <p>   </p>
   <form action="AtualizacaoC2.php" method="POST" id="form1" name="form1">
    <table>
        <tr>
        <div class="form-group">
        <td> 
            <label for="nome">Digite o código que deseja alterar:</label>
			
			
        <input class="form-control" type="text" id="codcliente" name="codcliente" required> </br>
</td>
</tr>
<tr>
<td>

      <input type="submit" name="button" id="button" class="btn btn-danger" value="Alterar" />

  </td>
  </tr>

</div>
</table>
</form>

</body>
</html>