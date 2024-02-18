<?php

use PHPUnit\Framework\TestCase;

require_once "src/MinhaClasseAvancado.php";

class MinhaClasseAvancadoTest extends TestCase{
    public function testSoma(){
        $classe = new MinhaClasseAvancado();
        # Valores positivos
        $resultado = $classe->somar(2, 3);
        $this->assertEquals(5, $resultado);
        # Valores negativos
        $resultado = $classe->somar(-2, -3);
        $this->assertEquals(-5, $resultado);
        # Valores diferentes
        $resultado = $classe->somar(-2, 3);
        $this->assertEquals(1, $resultado);
        # Adição de zero
        $resultado = $classe->somar(0, 3);
        $this->assertEquals(3, $resultado);
    }
}