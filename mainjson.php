<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        require_once './head.php';
        $varHead = head();
        ?>
        
        <title>Gerenciamento de Livros</title>
    </head>
    <body>
        <?php
        require_once './cabecalho.php';
        
        $varMenu = Menu();
        ?>
        
        <?php
        // put your code here
        require_once './select.php';
require_once './Acervo.php';
        ?>
        <br>
        <h2>Todos os Títulos Cadastrados</h2>
                
        
        <table class="table  table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Ano</th>
      <th scope="col">Preco</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Tipo</th>
      <th scope="col">Editora Id</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
 
  
  
  
</table>
        
         <?php
  
  $RespJson = select::SelectJson();
  
  //echo $RespJson;
  echo '<pre>';
  var_dump($RespJson);
  
  echo '</pre>';
  
  echo $RespJson['id'];
  ?>
    </body>
</html>


