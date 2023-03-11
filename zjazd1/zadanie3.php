<form action="zadanie3.php" method="post">
    <input type="number" name="liczbaA"/><br>
    <input type="submit">
</form> 

<?php
    if (isset($_POST['liczbaA'])){
        $a = $_POST['liczbaA'];
        $b = sqrt($a);
        echo ("Wynik to: ".round($b, 2));
    }    
?>