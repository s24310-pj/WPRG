<form action="zadanie10.php" method="post">
    <label>Wprowadź liczbę: </label><input type="number" name="number" /><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['number'])) {
    $n = $_POST['number'];

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ("\n <br/>");
    }
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j >= $i; $j--) {
            echo ("*");
        }
        echo ("\n <br/>");
    }
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i - 1; $j++) {
            echo ("&nbsp");
        }
        for ($j = $n; $j >= $i; $j--) {
            echo ("*");
        }
        echo ("\n <br/>");
    }
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j >= $i + 1; $j--) {
            echo ("&nbsp");
        }
        for ($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ("\n <br/>");
    }
}



?>