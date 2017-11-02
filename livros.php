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
        <title>Administracao</title>
     </head>
     <body>
         <?php
         require_once './cabecalho.php';
         $varMenu = Menu();
         ?>
         <br>
         <h2>Sistema de Gerenciamento</h2>
         <br>
         
         <div class="container">
             <div class="jumbotron">
                 
                 <h2>Cadastro Livros</h2>
                 <br>
                 <form method="POST" action="cadastro.php">
             
             
                 <div class="form-group">
                     
                     <input type="text" class="form-control" id="InputId"  placeholder="Informe o ID" name="id_form">
     
                     <br>
                     <input type="text" class="form-control" id="InputTitulo"  placeholder="Informe o Título" name="titulo_form">
     <br>
                     
                     <input type="text" class="form-control" id="InputAutor"  placeholder="Informe o Autor" name="autor_form">
     
                     <br>
                     <input type="text" class="form-control" id="InputAno"  placeholder="Informe o Ano" name="ano_form">
     
                     <br>
                     <input type="text" class="form-control" id="InputPreco"  placeholder="Informe o Preço" name="preco_form">
     
                     <br>
                     <input type="text" class="form-control" id="InputQuantidade"  placeholder="Informe a Quantidade" name="quantidade_form">
     
                     <br>
                     <input type="text" class="form-control" id="InputTipo"  placeholder="Informe o Tipo" name="tipo_form">
     
                     <br>
                     <input type="text" class="form-control" id="InputEditoraID"  placeholder="Informe a Id da Editora" name="editoraId_form">
    
                </div>
             <button type="submit" class="btn btn-primary">Salvar</button>
             
             <br>
             <br>
         </form>  
             </div>            
         </div>
     </body>
 </html>