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
                <LINK href="estilo.css" rel="stylesheet" type="text/css">
                <meta charset="UTF-8" >
        <title>Teste Layout</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <div id="menu">
            
            
             <nav class="navbar navbar-toggleable-md navbar-dark bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Biblioteca</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="#">Livros</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link disabled" href="#">Editoras</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link disabled" href="#">Usuarios</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Livro</button>
                    </form>
                </div>
            </nav>
        </div>
        
        <div id="formulario">
            <form>
            <div class="form-group row">
                <label for="input_id" >Id</label>
                <input class="form-control" type="text"  id="input_id">
               
                <label for="input_titulo" >Titulo</label>
                <input class="form-control" type="text"  id="input_titulo">
                
                <label for="input_autor" >Autor</label>
                <input class="form-control" type="text"  id="input_autor">
                
                <label for="input_ano" >Ano</label>
                <input class="form-control" type="text"  id="input_ano">
                
                <label for="input_preco" >Preco</label>
                <input class="form-control" type="text"  id="input_preco">
                
                <label for="input_quantidade" >Quantidade</label>
                <input class="form-control" type="text"  id="input_quantidade">
                
                <label for="input_tipo" >Tipo</label>
                <input class="form-control" type="text"  id="input_tipo">
                
                <label for="input_editora" >Editora</label>
                <input class="form-control" type="text"  id="input_editora">
                
                
            </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
</div>
            
        </div>
        
        
    </body>
</html>
