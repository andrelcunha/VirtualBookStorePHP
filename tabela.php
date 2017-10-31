<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
       
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once './select.php';
require_once './Acervo.php';
        ?>
        
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
  <?php
  $ArrayFrontEnd = select::SelectAll();
  foreach ($ArrayFrontEnd as $key=>$item) {
echo '<tbody>';
echo    '<tr>';
echo      '<th scope="row">'.$ArrayFrontEnd[$key]["id"].'</th>';
echo      '<td>'.$ArrayFrontEnd[$key]["titulo"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["autor"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["ano"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["preco"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["quantidade"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["tipo"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["editora_id"].'</td>';
echo       '<td><a href="#">Editar</a></td>'; 
echo       '<td><a href="#">Excluir</a></td>'; 
echo    '</tr>';
echo '</tbody>';
  }
?>
</table>
    </body>
</html>
