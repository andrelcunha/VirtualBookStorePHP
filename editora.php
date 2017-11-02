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
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once './cabecalho.php';
        $varMenu = Menu();
        
        ?>
        <br>
        <h2>Sistema de Gerenciamento</h2>
        <br>
        
        <div class="container">
            <div class="jumbotron">
                <h2>Cadastro Editoras</h2>
                <br>
                <form method="POST" action="CadastroEditora.php" >
            
            
            
            
            <div class="form-group">
                    
                    <input type="text" class="form-control"   placeholder="Informe o ID da Editora" name="id_form">
    
                    <br>
                    <input type="text" class="form-control"   placeholder="Informe o Nome da Editora" name="nome_form">
                    <br>
                    
                   
    
                   
                </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            
            <br>
            <br>
            
        </form>
                
            </div>
            
        </div>
        
    </body>
</html>
