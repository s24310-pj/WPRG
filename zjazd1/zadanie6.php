<form action="zadanie6.php" method="post">
    <label>pierwszy bok: </label><input type="number" name="liczbaA" /><br>
    <label>drugi bok: </label><input type="number" name="liczbaB" /><br>
    <label>trzeci bok: </label><input type="number" name="liczbaC" /><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['liczbaA']) && isset($_POST['liczbaB']) && isset($_POST['liczbaC'])) {
    $a = $_POST['liczbaA'];
    $b = $_POST['liczbaB'];
    $c = $_POST['liczbaC'];

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo ("Z podanych bokow da sie utowrzyc trojkat");
    } else {
        echo ("BŁĄD");
    }
}
?>