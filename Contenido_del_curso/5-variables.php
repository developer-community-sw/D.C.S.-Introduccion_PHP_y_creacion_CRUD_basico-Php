<?php
//===================================//
//             VARIABLES             //
//===================================//

//Variables de tipo entero//

$numero =10;
echo 'Esto es un numero;'.$numero;
//***********************************//
echo '<br></br>';

//Variables de tipo texto//
$texto = "Esto es una cadena de texto";
echo 'Mi cadena: '.$texto;

//***********************************//
echo '<br></br>';

//Variable tipo booleam//
$booleam = true;
echo 'Esto es una variable booleam: '.$booleam;
//***********************************//
echo '<br></br>';

//Variable de tipo arreglo//
$arreglo = array("Ajejandro", "Maria");
echo $arreglo[1];
//***********************************//
echo '<br></br>';

//Variables de tipo arreglo con propiedades//
$colores = array("color1"=>"rojo", "color2"=>"amarillo");
echo $colores["color1"];
//***********************************//
echo '<br></br>';

//Variables de tipo objeto//
$objeto = (object)["mueble1"=>"armario","mueble2"=>"escritorio"];
echo $objeto->mueble1;
//***********************************//
?>