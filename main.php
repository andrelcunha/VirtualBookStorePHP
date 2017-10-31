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
        <script type="text/javascript" src="main.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#atualiza_form").hide();
        });
        </script>
    </head>
    <body>
        <?php
            require_once './cabecalho.php';
            $varMenu = Menu();
            require_once './select.php';
            require_once './Acervo.php';
        ?>
        <br>
        
        <div id="atualiza_form">
            <h2>Atualiza Livros</h2>
            <form method="POST" action="atualiza.php">
                <div class="form-group">
                    <!--<input type="text" class="form-control"    name="id_form">
                    <br>-->

                    <label class="control-label" for="titulo_form">Título: </label>
                    <input class="form-control"  type="text" name="titulo_form" 
                           id="titulo_form" placeholder="Digite o título...">
                    <label class="control-label" for="autor_form">Autor: </label>
                    <input class="form-control"  type="text" name="autor_form" 
                           id="autor_form" placeholder="Digite o autor...">
                    <label class="control-label" for="Ano">Ano: </label>
                    <input class="form-control"  type="text" name="ano_form" 
                           id="ano_form" placeholder="Ano" size="5">
                    <label class="control-label" for="preco_form">Preço:</label>
                    <input class="form-control"  type="text" name="preco_form" 
                           id="preco_form" placeholder="R$" size="50">
                    <label class="control-label" for="preco_form">Tipo:</label>
                    <input class="form-control" type="text"
                           placeholder="Informe o Tipo" name="tipo_form" id="tipo_form">
                    <label class="control-label" for="editora">Editora:</label>
                    <input class="form-control" type="text"
                           placeholder="Informe a Id da Editora " name="editoraId_form" id="editoraId_form">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>            
                <br>
                <br>
            </form>
        </div>
        <div id="div_content">
            <h2>Todos os Títulos Cadastrados</h2>    
        
            <table class="table  table-hover">
                <thead>
                  <tr>
                    <!--<th scope="col">Id</th>-->
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Editora Id</th>
                    <th scope="col">Excluir</th>
                  </tr>
                </thead>
  <?php
  
  
  
  $ArrayFrontEnd = select::SelectAll();
  foreach ($ArrayFrontEnd as $key=>$item) {
echo '<tbody>';
echo    '<tr id="tr'.$key.'" onClick="handleClick('.$key.')">';
//echo      '<th scope="row">'.$ArrayFrontEnd[$key]["id"].'</th>';
echo      '<td>'.$ArrayFrontEnd[$key]["titulo"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["autor"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["ano"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["preco"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["quantidade"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["tipo"].'</td>';
echo      '<td>'.$ArrayFrontEnd[$key]["editora_id"].'</td>';


  
//$varteste = $ArrayFrontEnd[$key]["titulo"];

 // var_dump($ArrayTeste);
echo       '<td><form method="POST" action=excluir.php>'
            .'<input type="text" name="id_form" value='
        .$ArrayFrontEnd[$key]["id"].'>'.
        '<button type="submit" class=" btn btn-danger form-control"><i class="fa fa-trash" aria-hidden="true"></i></button>'.
        '</form</td>'; 
echo    '</tr>';
  
  }
  
    
    var_dump($varteste);  
echo '</tbody>';
?>
</table>
</div>
    </body>
</html>
