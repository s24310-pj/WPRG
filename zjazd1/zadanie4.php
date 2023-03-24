<form action="zadanie4.php" method="post">
    <input type="number" name="liczbaA" /><br>
    <input type="number" name="liczbaB" /><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['liczbaA']) && isset($_POST['liczbaB'])) {
    $a = $_POST['liczbaA'];
    $b = $_POST['liczbaB'];
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a % $b;

    echo ("Wynik dodawania to: " . $c . "<br/>");
    echo ("Wynik odejmowania to: " . $d . "<br/>");
    echo ("Wynik mnozenia to: " . $e . "<br/>");
    echo ("Wynik modulo to: " . $f);
}
?>