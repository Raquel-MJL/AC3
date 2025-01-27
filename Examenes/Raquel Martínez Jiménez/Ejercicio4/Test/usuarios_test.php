<?php

use PHPUnit\Framework\TestCase;

class Usuarios_test extends TestCase {

    public function testUsuarios() {
        $usuario1 = new Usuarios("Mikaela", 82555);

        $this->assertTrue(is_numeric($usuario1->getClave()), "Error, la clave no es numérica");

        $this->assertIsString($usuario1->getNombre(), "El nombre debe ser una cadena de caracteres");

        $this->assertIsNumeric($usuario1->getClave(), "La clave no es de tipo numérico");

        $this->assertIsString($usuario1->getDatos(), "El método getDatos no devuelve un string");

        $usuario1->setClave("abc123");

        $this->assertIsString($usuario1->getClave());

        $this->assertIsNumeric($usuario1->getClave(), "La clave no es numérica");

        $this->assertEquals("juan", $usuario1->getNombre(), "El nombre del usuario no coincide");

        $this->assertNotNull($usuario1->getClave(), "La clave no tiene valor o es nula");
    }
}
?>
