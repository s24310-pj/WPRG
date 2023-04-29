<form action="zadanie1.php" method="post">
    <label>Wpisz pierwszą liczbę: </label><input type="number" name="liczba1" /><br>
    <label>Wpisz drugą liczbę: </label><input type="number" name="liczba2" /><br>
    Wybierz działanie jakie chcesz wykonać: <br>
    <label>dodawanie</label><input type="radio" name="dzialanie" value="dodawanie" checked><br>
    <label>odejmowanie</label><input type="radio" name="dzialanie" value="odejmowanie"><br>
    <label>mnozenie</label><input type="radio" name="dzialanie" value="mnozenie"><br>
    <label>dzielenie</label><input type="radio" name="dzialanie" value="dzielenie"><br>

    <input type="submit" value="Wykonaj!">
</form>

<?php

include 'zadanie1_functions.php';

if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
    $a = $_POST['liczba1'];
    $b = $_POST['liczba2'];
    $operation = $_POST['dzialanie'];

    switch ($operation) {
        case "dodawanie":
            dodawanie($a, $b);
            break;
        case "odejmowanie":
            odejmowanie($a, $b);
            break;
        case "mnozenie":
            mnozenie($a, $b);
            break;
        case "dzielenie":
            dzielenie($a, $b);
        default:
            echo ("Cos poszlo nie tak");
    }
}
?>