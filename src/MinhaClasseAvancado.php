<?php

class MinhaClasseAvancado {
    function somar(array $lista): int{
        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return 0;
            }
        }
        return array_sum($lista);
    }

    function subtrair($a, $b, /*array $lista*/){
        /*
        return array_reduce(array_slice($lista, 1), function ($resultado, $elemento) {
            return $resultado - $elemento;
        }, reset($lista));
        */
        if (!is_numeric($a) ||!is_numeric($b) ) {
            return 0;
        }
        return $a - $b;
    }
}

?>