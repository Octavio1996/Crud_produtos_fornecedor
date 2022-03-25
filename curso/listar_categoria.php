<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1ffd99482.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="container" style="margin-top: 40px; width: 500px">
	  <div style="text-align: right">
  	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>
<h3>Lista de Produtos</h3>
<br> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Produto</th>
      <th scope="col"> Ação</th>
    </tr>
  </thead>
    
       <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `categoria`";
        $busca = mysqli_query($conexao,$sql);

        while ($array = mysqli_fetch_array($busca)) {

          $id_categoria = $array['id_categoria'];
          $nomecategoria = $array['nome_categoria'];
          
         ?>
     <tr>
      <td><?php echo $nomecategoria ?></td>


      <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
      	<a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>


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