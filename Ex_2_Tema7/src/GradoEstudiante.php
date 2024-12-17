<?php
declare(strict_types = 1);
namespace Ejercicio2 ;

echo gradoEstudiante (40);

function gradoEstudiante (int $grado) : string{

    if ($grado == 60){
return "Primera Divisió";
    }else if($grado >= 45) {
return "Segona Divisió";
    }else if($grado >= 33){
return "Tercera Divisió";
    }else {
return "Estudiante suspenso";
}

}


?>
