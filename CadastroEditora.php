<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './select.php';

$varIdEditora = $_POST['id_form'];
$varNomeEditora = $_POST['nome_form'];


$returnInsert = select::InsertEditora($varIdEditora,$varNomeEditora);


var_dump($returnInsert);

if($returnInsert==0){
    
    echo 'Não foi possível executar o cadastro! Registro existente';
    
    
}
else{
    
    echo 'registro Atualizado';
    
}