<form action="zadanie8.php" method="post">
    <label>pierwsza liczba: </label><input type="number" name="liczbaA" /><br>
    <label>druga liczba: </label><input type="number" name="liczbaB" /><br>
    <label>trzecia liczba: </label><input type="number" name="liczbaC" /><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['liczbaA']) && isset($_POST['liczbaB']) && isset($_POST['liczbaC'])) {
    $a = $_POST['liczbaA'];
    $b = $_POST['liczbaB'];
    $c = $_POST['liczbaC'];

    if ($a > $b) {
        if ($a > $c) {
            if ($b > $c) {
                echo ($c . "," . $b . "," . $a . "||" . $a . "," . $b . "," . $c);
            } else { //c>b
                echo ($b . "," . $c . "," . $a . "||" . $a . "," . $c . "," . $b);
            }
        } else { //c>a
            echo ($b . "," . $a . "," . $c . "||" . $c . "," . $a . "," . $b);
        }
    } else { //b>a
        if ($a < $c) {
            if ($b > $c) {
                echo ($a . "," . $c . "," . $b . "||" . $b . "," . $c . "," . $a);
            } else { //c>b
                echo ($a . "," . $b . "," . $c . "||" . $c . "," . $b . "," . $a);
            }
        } else { //c<a
            echo ($c . "," . $a . "," . $b . "||" . $b . "," . $a . "," . $c);
        }
    }
}
?>