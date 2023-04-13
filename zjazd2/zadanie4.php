<form method="post" action="zadanie4.php">
    <label>Podaj liczbę: </label><input type="number" id="number" name="number" required><br>
    <input type="submit" value="Sprawdź!">
</form>

<?php
function is_prime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    if ($number > 0) {
        if (is_prime($number)) {
            echo ("Liczba " . $number . " jest liczbą pierwszą <br>");
        } else {
            echo ("Liczba " . $number . " nie jest liczbą pierwszą <br>");
        }
    } else {
        echo ("Podana liczba nie jest liczbą całkowitą dodatnią");
    }
}









?>