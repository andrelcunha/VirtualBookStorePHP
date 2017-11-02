<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acervo
 *
 * @author zeccu
 */
class Acervo {
    //put your code here
    public $id;
    public $titulo;
    public $autor;
    public $ano;
    public $preco;
    public $quantidade;
    public $tipo;
    public $editora_id;
   
   
    
    
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getAno() {
        return $this->ano;
    }

    function getPreco() {
        return $this->preco;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getEditora_id() {
        return $this->editora_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setEditora_id($editora_id) {
        $this->editora_id = $editora_id;
    }

    function Acervo($id, $titulo, $autor, $ano, $preco, $quantidade, $tipo, $editora_id) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->tipo = $tipo;
        $this->editora_id = $editora_id;
        
    }
  
                function DecodeJson($VarJson){
        
        $VarDecode = json_decode($VarJson);
        
        return $VarDecode;
        
    }
    
}
