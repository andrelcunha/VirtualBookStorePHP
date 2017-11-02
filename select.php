<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of select
 *
 * @author zeccu
 */
require_once './conexao.php';
require_once './Acervo.php';
class select {
    //put your code here
   
    


    public function SelectAll(){
              
    //$ConDb = new Conexao();
    $MinhaQuery='select * from acervo';
    //$RespostaSelect=$ConDb->getconexao()->prepare($MinhaQuery);
    $Select= Conexao::getconexao()->prepare($MinhaQuery);
    $Select->execute();
     $MeuArray=$Select->fetchAll(PDO::FETCH_ASSOC);
     
    
    
    return $MeuArray;
   
    }
    
    public function SelectLivro($id){
        
        $ConDb = new Conexao();
        
        $MinhaQuery='SELECT * FROM acervo WHERE id=:id';
        $ExecSql=$ConDb->getconexao()->prepare($MinhaQuery);
        $ExecSql->bindValue(":id", $id);
        $MeuArray = $ExecSql->fetch(PDO::FETCH_ASSOC);
        return $meuArray;
        echo $ExecSql->rowCount();
        
        
        
    }

        public function InsertEditora($id,$nome) {
        
        $conDb = new Conexao();
        $MinhaQuery="INSERT INTO editora(id,nome)values(:id,:nome); ";
        
        $execSql=$conDb->getconexao()->prepare($MinhaQuery);
        $execSql->bindValue(":id", $id);
        $execSql->bindValue(":nome", $nome);
        $execSql->execute();
        echo $execSql->rowCount();
        return $execSql->rowCount();
    }
    
    public function InsertLivro($id,$titulo,$autor,$ano,$preco,$quantidade,$tipo,$editora_id) {
        
        $conDb = new Conexao();
        $MinhaQuery="INSERT INTO acervo(id,titulo,autor,ano,preco,quantidade,tipo,editora_id)values(:id,:titulo,:autor,:ano,:preco,:quantidade,:tipo,:editora_id); ";
        
        $execSql=$conDb->getconexao()->prepare($MinhaQuery);
        $execSql->bindValue(":id", $id);
        $execSql->bindValue(":titulo", $titulo);
        $execSql->bindValue(":autor", $autor);
        $execSql->bindValue(":ano", $ano);
        $execSql->bindValue(":preco", $preco);
        $execSql->bindValue(":quantidade", $quantidade);
        $execSql->bindValue(":tipo", $tipo);
        $execSql->bindValue(":editora_id", $editora_id);
        $execSql->execute();
        echo $execSql->rowCount();
        return $execSql->rowCount();
    }
    
    public function UpdateLivro($id,$titulo,$autor,$ano,$preco,$quantidade,$tipo,$editora_id) {       
        $conDb = new Conexao();
        $MinhaQuery="UPDATE acervo SET titulo=:titulo,autor=:autor,ano=:ano,preco=:preco,quantidade=:quantidade,tipo=:tipo,editora_id=:editora_id WHERE id=:id ;";
    
        $execSql=$conDb->getconexao()->prepare($MinhaQuery);
        $execSql->bindValue(":id", $id);
        $execSql->bindValue(":titulo", $titulo);
        $execSql->bindValue(":autor", $autor);
        $execSql->bindValue(":ano", $ano);
        $execSql->bindValue(":preco", $preco);
        $execSql->bindValue(":quantidade", $quantidade);
        $execSql->bindValue(":tipo", $tipo);
        $execSql->bindValue(":editora_id", $editora_id);
        $execSql->execute();
        echo $execSql->rowCount();
        return $execSql->rowCount();
    }
    
    
    
    public function BuscarTitulo($varTituloBusca){
              
    //$ConDb = new Conexao();
    $MinhaQuery="select * from acervo where titulo like '%".$varTituloBusca."%'";
    //$RespostaSelect=$ConDb->getconexao()->prepare($MinhaQuery);
    $Select= Conexao::getconexao()->prepare($MinhaQuery);
    $Select->execute();
     $MeuArray=$Select->fetchAll(PDO::FETCH_ASSOC);
     
    
    
    return $MeuArray;
   
    }
    
}
