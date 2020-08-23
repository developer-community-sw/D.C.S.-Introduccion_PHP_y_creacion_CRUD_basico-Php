# D.C.S.-Introduccion_PHP_y_creacion_CRUD_basico-Php
D.C.S | Curso Online: Udemy | Cursos: Introducción a PHP y creación de un CRUD básico. | Lenguaje: Php | Ide: Visual Studio Code

# VARIABLES

//Variables de tipo entero//<br>
|<br>
|$numero = 10;<br>
|echo 'Esto es un numero;'.$numero;<br>
//***********************************//<br>

//Variables de tipo texto//<br>
|<br>
|$texto = "Esto es una cadena de texto";<br>
|echo 'Mi cadena: '.$texto;<br>
//***********************************//<br>

//Variable tipo booleam//<br>
|<br>
|$booleam = true;<br>
|echo 'Esto es una variable booleam: '.$booleam;<br>
//***********************************//

//Variable de tipo arreglo//<br>
|<br>
|$arreglo = array("Ajejandro", "Maria");<br>
|echo $arreglo[1];<br>
//***********************************//<br>

//Variables de tipo arreglo con propiedades//<br>
|<br>
|$colores = array("color1"=>"rojo", "color2"=>"amarillo");<br>
|echo $colores["color1"];<br>
//***********************************//<br>

//Variables de tipo objeto//<br>
|<br>
|$objeto = (object)["mueble1"=>"armario""mueble2"=>"escritorio"];<br>
|echo $objeto->mueble1;<br>
//***********************************//<br><br>
# FUNCIONES

//funciones sin parámetros<br>
|<br>
|function bienvenido(){<br>
|  echo "Bienvenido al curso de PHP";<br>
|}<br>
|bienvenido();<br>
//***********************************//<br>

//funciones con parametros<br>
|<br>
|function saludar($hola){<br>
|    echo $hola;<br>
|}<br>
|saludar("Hola a todos");<br>
//***********************************//<br>

//funcion con retorno<br>
function retorno($retornar){<br>
    return $retornar;<br>
}<br>
echo retorno("Retornando la función");<br>