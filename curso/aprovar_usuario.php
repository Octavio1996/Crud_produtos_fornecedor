<!DOCTYPE html>
<html>
<head>
	<title>Aprovar Usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1ffd99482.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="container" style="margin-top: 40px; width: 500px">
	  <div style="text-align: right">
  	<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>
<h3>Lista de Usuários</h3>
<br> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome </th>
      <th scope="col">Email </th>
      <th scope="col">Nível </th>
      <th scope="col"> Ação</th>
    </tr>
  </thead>
    
       <?php
        include 'conexao.php';
        $sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
        $busca = mysqli_query($conexao,$sql);

        while ($array = mysqli_fetch_array($busca)) {

          $id_usuario = $array['id_usuario'];
          $nomeusuario = $array['nome_usuario'];
          $mail = $array['mail_usuario'];
          $nivel = $array['nivel_usuario'];
         ?>
     <tr>
      <td><?php echo $nomeusuario ?></td>
      <td><?php echo $mail ?></td>
      <td><?php echo $nivel ?></td>

      <td>
        <a class="btn btn-success btn-sm" style="color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1" role="button"><i class="fa-regular fa-face-smile-beam"></i>&nbsp;Administrador</a>

        <a class="btn btn-warning btn-sm" style="color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=2" role="button"><i class="fa-regular fa-face-smile-beam"></i>&nbsp;Funcionario</a>

        <a class="btn btn-dark btn-sm" style="color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=3" role="button"><i class="fa-regular fa-face-smile-beam"></i>&nbsp;Conferente</a>

      	<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?> " role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>


      </td>
      </tr>
       
      <?php } ?>



    
    
  
</table>


</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>