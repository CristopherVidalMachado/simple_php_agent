<?php



function tamanhoMatriz(){
    if(isset($_POST['tamanho-matriz']))
        return $_POST['tamanho-matriz'];
    else    
        return 4;
}

function validarFormigueiros(){
    if(isset($_POST['formigueiros']))
        return $_POST['formigueiros'];
    else    
        return '0.10';
}


function getTotalElementos(){
    return tamanhoMatriz()*  tamanhoMatriz();
}

function getTotalFormigueiros(){
    if(validarFormigueiros() != 'random')
       return round( getTotalElementos() * validarFormigueiros());
    else
      return rand(1, getTotalElementos() -1);
    
}
