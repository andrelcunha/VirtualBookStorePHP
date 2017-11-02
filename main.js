/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function handleClick(id){
    //console.log("id="+ id);
    //console.log(getLineContent(id));
    bookObj = getLineContent(id);
    setFormContent(bookObj);
    cleanTable();
    //loadForm();
}

function cleanTable(){
    $("#div_content").remove();
    $("#atualiza_form").show();
}

function getLineContent(id){
    var line = document.getElementById("tr"+id);
    console.log(line);
    var bookObj = {
        id: line.childNodes[0].innerText,
        title: line.childNodes[1].innerText,
        autor: line.childNodes[2].innerText,
        ano: line.childNodes[3].innerText,
        preco: line.childNodes[4].innerText,
        quantidade: line.childNodes[5].innerText,
        tipo: line.childNodes[6].innerText,
        editoraId: line.childNodes[7].innerText
        
    };
    return bookObj;
}



function loadForm(){
  $("body").load("atualizar.html");
}

function createForm(){
    var body = document.getElementsByTagName("body")[0];
    myForm = document.createElement("form");
    myForm.setAttribute("class", "democlass");
}

function setFormContent(bookObj){
    $("#id_form").val(bookObj.id);
    $("#titulo_form").val(bookObj.title);
    $("#autor_form").val(bookObj.autor);
    $("#ano_form").val(bookObj.ano);
    $("#preco_form").val(bookObj.preco);
    $("#quantidade_form").val(bookObj.quantidade);
    $("#tipo_form").val(bookObj.tipo);
    $("#editoraId_form").val(bookObj.editoraId);
    
}