<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes  </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="estilos.css" rel="stylesheet" type="text/css">
	   <link rel="sortcut icon" href="icon.png" type="image/x-icon" />
</head>


<body >

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
    <div class="container"></div>
    <div class="form-signin"></div>
    <label> <h1 class="display-6">Cadastro de Clientes</h1>     </label></br>
    <form  action="CadastroC.php" method="post">
    <table class="table">
  <thead class="thead-dark">

  <tbody>
    <tr>
    
      <td>  <div class="form-group">
    <label> Nome: <input class="form-control" type="text" name="nome" maxlength="40" required>  </br></label>
</div></td>
      <td><div class="form-group">

<label> Data de Nascimento: <input class="form-control" type="date" name="data_nasc" required>  </br></label>
</div></td>
      <td><div class="form-group">
    <label> Celular: <input class="form-control"type="number" name="celular" maxlength="40" required>  </br></label>
</div></td>
    </tr>
    <tr>
  
      <td><div class="form-group">
    <label> E-mail: <input class="form-control"type="text" name="email"maxlength="80" required>  </br></label>
</div></td>
      <td><div class="form-group">
    <label> Rua: <input class="form-control"type="text" name="rua" required>  </br></label>
</div></td>
      <td><div class="form-group">
    <label> Número: <input class="form-control"type="number" name="numero" required>  </br></label>
</div></td>
    </tr>
    <tr>
   
      <td><div class="form-group">
    <label> Bairro: <input class="form-control"type="text" name="bairro"maxlength="30" required>  </br></label>
</div></td>
      <td><div class="form-group">
    <label> CEP: <input class="form-control"type="text" name="cep"maxlength="15" required>  </br></label>
</div></td>
      <td><div class="form-group">
    <label> Cidade: <input class="form-control"type="text" name="cidade"maxlength="45" required>  </br></label>
</div></td>
<td><div class="form-group">
    <label>   Estado:
       <select name="estado" >
       <option value="selecioneEs">  Selecione    </option>
      <option value="sp">  SP     </option>
      <option value="rj">  RJ     </option>
      <option value="sc">  SC     </option>
      <option value="mg">  MG     </option>
      <option value="go">  GO     </option>

       </select>


    </label>
</div></td>
    </tr>
  </tbody>
</table>


    

  
    








<p>           </p>
<div class="form-group">

    <input type="submit" name="button" id="button" value="Cadastrar" class="btn btn-dark">
    
    <input type="reset" name="button" id="button" value="Cancelar" class="btn btn-danger">
   
   
    </div>
 
    


</form>



</body>
</html>
<?php
error_reporting(0);
require_once "conexao.php";

if($_POST)
{
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


$sql = "insert into clientes(nome,data_nasc,celular,email,rua,numero,bairro,cep,cidade,estado)
values('$nome','$data_nasc','$celular','$email','$rua','$numero','$bairro','$cep','$cidade','$estado')";

$result = mysqli_query($conexao,$sql);

if($result)
{
	echo "<center><B><font color=#1C1C1C size=5> Usu&aacute;rio cadastrado com sucesso! </font></center>";
}

else {

    echo "Erro!";
}









}


?>




