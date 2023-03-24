<form action="zadanie5.php" method="post">
    <input type="text" name="text1" /><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['text1'])) {
    $a = $_POST['text1'];
    $data = explode(" ", $a);
    echo ("%" . $data[1] . " " . $data[0] . "%$#");
}
?>