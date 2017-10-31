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
        //
        
       $gafe= $_GET['yyy'];
       var_dump($gafe);
        ?>
        <br>
        <h2>Sistema de Gerenciamento</h2>
        <br>
        
        <div class="container">
            <div class="jumbotron">
                
                <h2>Atualizar Livros</h2>
                <br>
                <form method="POST" action="cadastro.php">
            
            
                <div class="form-group">
                    
                    <input type="text" class="form-control"    name="id_form">
    
                    <br>
                    <input type="text" class="form-control"   placeholder="Informe o Título" name="titulo_form">
    <br>
                    
                    <input type="text" class="form-control"  placeholder="Informe o Autor" name="autor_form">
    
                    <br>
                    <input type="text" class="form-control"   placeholder="Informe o Ano" name="ano_form">
    
                    <br>
                    <input type="text" class="form-control"   placeholder="Informe o Preço" name="preco_form">
    
                    <br>
                    <input type="text" class="form-control"  placeholder="Informe a Quantidade" name="quantidade_form">
    
                    <br>
                    <input type="text" class="form-control"  placeholder="Informe o Tipo" name="tipo_form">
    
                    <br>
                    <input type="text" class="form-control"  placeholder="Informe a Id da Editora" name="editoraId_form">
    
                </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            
            <br>
            <br>
        </form>
                
            </div>
            
        </div>
        
        
        <!--
        
        <form method="POST" action="cadastro.php">
            Id<input type="text" name="id_form">
            Titulo<input type="text" name="titulo_form">
            Autor<input type="text" name="autor_form">
            ano<input type="text" name="ano_form">
            Preco<input type="text" name="preco_form">
            quantidade<input type="text" name="quantidade_form">
            Tipo<input type="text" name="tipo_form">
            Editora Id<input type="text" name="editoraId_form">
            <input type="submit" value="enviar">
            
        </form>
              
            -->  

     
        
    </body>
</html>

