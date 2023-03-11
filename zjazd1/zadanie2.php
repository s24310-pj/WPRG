<form action="zadanie2.php" method="post">
    <input type="number" name="liczbaA"/><br>
    <input type="number" name="liczbaB"/><br>
    <input type="submit">
</form> 

<?php
    if (isset($_POST['liczbaA']) && isset($_POST['liczbaB'])){
        $a = $_POST['liczbaA'];
        $b = $_POST['liczbaB'];
        $c = $a * $b;
        echo ("Wynik to: ".$c);
    }    
?>