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
if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
    $a = $_POST['liczba1'];
    $b = $_POST['liczba2'];
    $operation = $_POST['dzialanie'];

    switch($operation){
        case "dodawanie":
            echo($a+$b);
            break;
        case "odejmowanie":
            echo($a-$b);
            break;
        case "mnozenie":
            echo($a*$b);
            break;
        case "dzielenie":
            if($b == 0){
                echo("Nie mozna dzielic przez 0");
            } else{
                echo($a/$b);
            }
        default:
            echo("Cos poszlo nie tak");
    }
}
?>