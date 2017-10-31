<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once './select.php';


$Method = '$_POST';

$varId = $_POST['id_form'];
$varTitulo =$_POST['titulo_form'];
$varAutor = $_POST['autor_form'];
$varAno = $_POST['ano_form'];
$varPreco = $_POST['preco_form'];
$varQuantidade = $_POST['quantidade_form'];
$varTipo = $_POST['tipo_form'];
$varEditora = $_POST['editoraId_form'];





//$varX = new Acervo($varId,$varTitulo,$varAutor,$varAno,$varPreco,$varQuantidade,$varTipo,$varEditora);

$ReturnInsertLivros = select::InsertLivro($varId,$varTitulo,$varAutor,$varAno,$varPreco,$varQuantidade,$varTipo,$varEditora);

var_dump($ReturnInsertLivros);
//$obj->setAutor($vatTeste);
//$obj->setTitulo($varcscsdc);


?>