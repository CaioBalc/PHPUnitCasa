<?php

use PHPUnit\Framework\TestCase;

require_once "src/MinhaClasseAvancado.php";

class MinhaClasseAvancadoTest extends TestCase{
    public function testSoma(){
        $classe = new MinhaClasseAvancado();
        # Exercício 1
        $resultado = $classe->somar(2, 3);
        $this->assertEquals(5, $resultado);
        # Exercício 2
        $resultado = $classe->somar(-2, 3);
        $this->assertEquals(1, $resultado);
        # Exercício 3
        $resultado = $classe->somar(0, 5);
        $this->assertEquals(5, $resultado);
    }
}