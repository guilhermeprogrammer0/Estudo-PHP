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
   <center> <label> <h1 class="display-6">Exclusão de Clientes</h1>     </label></br>    </center>
 <form action="ExclusaoC2.php" method="POST" id="form1" name="form1">
    <table>
        <tr>
        <div class="form-group">
        <td> 
            <label for="nome">Digite o código que deseja excluir:</label>
			
			
        <input class="form-control" type="text" id="codcliente" name="codcliente" required> </br>
</td>
</tr>
<tr>
<td>

      <input type="submit" name="button" id="button" class="btn btn-danger" value="Excluir" />

  </td>
  </tr>

</div>
</table>
</form>







</body>
</html>