<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './conexao.php';

$ConDb = new Conexao();
$MinhaQuery='select * from acervo';


$RespostaSelect=$ConDb->getconexao()->prepare($MinhaQuery);
$RespostaSelect->execute();

echo $RespostaSelect->rowCount();