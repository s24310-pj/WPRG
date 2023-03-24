<form action="zadanie9.php" method="post">
    <label>Wprowadź liczby do pierwszej tablicy (rozdzielone ","): </label><input type="text" name="numbers1" /><br>
    <label>Wprowadź liczby do drugiej tablicy (rozdzielone ","): </label><input type="text" name="numbers2" /><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['numbers1']) && isset($_POST['numbers2'])) {
    $a = $_POST['numbers1'];
    $b = $_POST['numbers2'];
    $tab1 = explode(",", $a);
    $tab2 = explode(",", $b);
    $output = array();

    if (sizeof($tab1) == sizeof($tab2)) {
        for ($i = 0; $i < sizeof($tab1); $i++) {
            $output[$i] = $tab1[$i] * $tab2[$i];
        }

        for ($i = 0; $i < sizeof($tab1); $i++) {
            echo ($output[$i] . " ");
        }
    } else {
        echo ("BŁĄD");
    }

}
?>