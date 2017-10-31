<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once './Acervo.php';
        
        
        
        $xxx = new Acervo(100, 'O auto da compadecida', 'Ariano Suassuna', 1998, 29.30, 5, 1, 10);
        
        $JsonEncodeVar = json_encode($xxx);
        
        print_r($JsonEncodeVar);
        
        $DecodejsonVar = Acervo::DecodeJson($JsonEncodeVar);
        
        $yyy = new Acervo($DecodejsonVar->id, $DecodejsonVar->titulo, $DecodejsonVar->autor, $DecodejsonVar->ano, $DecodejsonVar->preco, $DecodejsonVar->quantidade, $DecodejsonVar->tipo, $DecodejsonVar->editora_id);
        
        
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo $yyy->getTitulo();
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo $yyy->getAno();
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo $yyy->getQuantidade();
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo $yyy->getAutor();
        
        
        ?>
    </body>
</html>
