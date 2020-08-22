<?php
//===================================//
//             FUNCIONES             //
//===================================//
//funciones sin parámetros

function bienvenido(){
  echo "Bienvenido al curso de PHP";
}
bienvenido();
//***********************************//
echo '<br></br>';

//funciones con parametros
function saludar($hola){
    echo $hola;
}
saludar("Hola a todos");
//***********************************//
echo '<br></br>';

//funcion con retorno
function retorno($retornar){
    return $retornar;
}
echo retorno("Retornando la función");
?>