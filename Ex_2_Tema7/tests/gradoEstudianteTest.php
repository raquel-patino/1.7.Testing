<?php
namespace Ejercicio2\Tests;
use PHPUnit\Framework\TestCase;
require_once "Ex_2_Tema7/src/GradoEstudiante.php";

class GradoEstudianteTest extends TestCase{

public function testComprobarStringDevueltaPrimeraDivisio () {
    
    $this->assertEquals("Primera Divisió", \Ejercicio2\gradoEstudiante(60));

}
public function testComprobarStringDevueltaSegonaDivisio () {

    $this->assertEquals("Segona Divisió", \Ejercicio2\gradoEstudiante(49));
}

public function testComprobarStringDevueltaTerceraDivisio () {
    $this->assertEquals("Tercera Divisió", \Ejercicio2\gradoEstudiante(35));
}

public function testComprobarStringDevueltaSuspenso () {
$this->assertEquals("Estudiante suspenso", \Ejercicio2\gradoEstudiante(20));
}
}

?>