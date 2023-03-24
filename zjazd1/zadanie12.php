<form action="zadanie12.php" method="post">
    <label>Wprowadź liczbę wierszy: </label><input type="number" name="a" required /><br>
    <label>Wprowadź liczbę kolumn: </label><input type="number" name="b" required /><br>
    <label>Macierz: (liczby oddzielone , lub spacją) </label><textarea name="matrix" rows="10" cols="30"
        required></textarea><br>
    <input type="submit">
</form>


<?php

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['matrix'])) {
    $rows = $_POST['a'];
    $columns = $_POST['b'];
    $array = $_POST['matrix'];


    $matrix = array();
    $values = preg_split('/\s+|,/', $array);
    $index = 0;
    for ($i = 0; $i < $rows; $i++) {
        $row = array();
        for ($j = 0; $j < $columns; $j++) {
            $row[] = floatval($values[$index++]);
        }
        $matrix[] = $row;
    }


    $trasponse = array();
    for ($i = 0; $i < $columns; $i++) {
        $row = array();
        for ($j = 0; $j < $rows; $j++) {
            $row[] = $matrix[$j][$i];
        }
        $trasponse[] = $row;
    }


    echo ("<p>Macierz oryginalna</p>");
    echo ("<table>");
    for ($i = 0; $i < $rows; $i++) {
        echo ("<tr>");
        for ($j = 0; $j < $columns; $j++) {
            echo ("<td>" . $matrix[$i][$j] . "</td>");
        }
        echo ("</tr>");
    }
    echo ("</table>");

    echo ("<p>Macierz transponowana</p>");
    echo ("<table>");
    for ($i = 0; $i < $columns; $i++) {
        echo ("<tr>");
        for ($j = 0; $j < $rows; $j++) {
            echo ("<td>" . $trasponse[$i][$j] . "</td>");
        }
        echo ("</tr>");
    }
    echo ("</table>");










}

?>