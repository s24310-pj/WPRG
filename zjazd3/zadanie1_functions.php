<?php
    include 'zadanie1_main.php';

    function dodawanie($a, $b){
        $c = $a + $b;
        return $c;
    }

    function odejmowanie($a, $b){
        $c = $a - $b;
        return $c;
    }

    function mnozenie($a, $b){
        $c = $a * $b;
        return $c;
    }

    function dzielenie($a, $b){
        if($b == 0){
            echo("Nie mozna dzielic przez 0");
        }
        else{
            $c = $a / $b;
            return $c;
        }
        
    }
?>