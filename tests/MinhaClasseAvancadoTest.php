<?php

use PHPUnit\Framework\TestCase;

require_once "src/MinhaClasseAvancado.php";

class MinhaClasseAvancadoTest extends TestCase{
    public function testSomar(){
        $lista = new MinhaClasseAvancado;
        # Valores positivos
        $this->assertEquals(5, $lista->somar([2, 3]));
        # Valores negativos
        $this->assertEquals(-5, $lista->somar([-2, -3]));
        # Valores diferentes
        $this->assertEquals(1, $lista->somar([-2, 3]));
        # Adição de zero
        $this->assertEquals(3, $lista->somar([0, 3]));
        # Valores decimais
        $this->assertEquals(15, $lista->somar([10, 33, -28]));
        $this->assertEquals(5.5, $lista->somar([2.5, 3]));
        # Lista com Strings Numéricas:
        $this->assertEquals(7, $lista->somar(['2', '5']));
        # Valores não numérico
        $this->assertEquals(0, $lista->somar(["Frase tal", "Palavra"]));
    }

    public function testSubtrair(){
        $lista = new MinhaClasseAvancado;
        /*
        # Valores positivos
        $this->assertEquals(1, $lista->subtrair([3, 2]));
        */
        # Valores positivos
        $resultado = $lista->subtrair(2, 3);
        $this->assertEquals(-1, $resultado);
        # Valores negativos
        $resultado = $lista->subtrair(-2, -3);
        $this->assertEquals(1, $resultado);
        # Valores diferentes
        $resultado = $lista->subtrair(-2, 3);
        $this->assertEquals(-5, $resultado);
        # Adição de zero
        $resultado = $lista->subtrair(0, 2);
        $this->assertEquals(-2, $resultado);
        # Valores decimais
        $resultado = $lista->subtrair(33, 22);
        $this->assertEquals(11, $resultado);
        # Valores não numérico
        $this->assertEquals(0, $lista->somar(["Frase tal", "Palavra"]));
    }

    /**
     * APERFEIÇOAR O CÓDIGO
     */
    public function testSomaCorreta(){
        $lista = new MinhaClasseAvancado();

        # Valores positivos
        $resultado = $lista->somaCorreta(2, 3);
        $this->assertEquals(5, $resultado);
    }

    /**
     * APERFEIÇOAR O CÓDIGO E ADICIONAR ELE AO MINHACLASSEAVANCADO
     */
    public function testSomaComArgumentosInvalidos(){
        $lista = new MinhaClasseAvancado();
    
        # Verifica se o método somar() lança uma exceção ao passar argumentos não numéricos
        $this->expectException(\Exception::class);
        $lista->somar(["Frase tal", "Palavra"]);
    }
    
    
}