<form action="zadanie2.php">
    <label>Imie </label><input type="text" name="first"><br>
    <label>Nazwisko</label><input type="text" name="second"><br>
    <input type="submit">
</form>

<?php

    $plik = fopen('zadanie2.txt','a');

    if (isset($_POST['first']) && isset($_POST['second'])) {
        $name = $_POST['first'];
        $surname = $_POST['second'];

        $text = $name." ".$surname;

        fwrite($plik, $text);

        fclose($plik);

    }

?>