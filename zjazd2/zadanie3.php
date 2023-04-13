<form action="zadanie3.php" method="post">
    <label>Wybierz liczbę osób dla której chcesz zarezerwować pokój: </label><br>
    <select name="people">
        <option value=1> 1 </option>
        <option value=2> 2 </option>
        <option value=3> 3 </option>
        <option value=4> 4 </option>
    </select><br><br>

    Dane osoby rezerwującej:<br>
    <label>Imię: </label><input type="text" name="name" required><br>
    <label>Nazwisko: </label><input type="text" name="surname" required><br>
    <label>Adres: </label><input type="text" name="address" required><br>
    <label>Nr karty kredytowej: </label><input type="number" name="creditcard_number" max="9999999999999999"
        required><br>
    <label>Kod CVV: </label><input type="number" name="cvv" max="999" required><br>
    <label>Email: </label><input type="email" name="email" required><br><br>

    Dane pobytu:<br>
    <label>Data pobytu od: </label><input type="date" name="date_from" required><br>
    <label>Data pobytu do: </label><input type="date" name="date_to" required><br>
    <label>Godzina przyjazdu </label><input type="time" name="time" required><br><br>

    <label>Dodatkowe opcje: </label><br>
    <select name="addons[]" multiple>
        <option value="popielniczka"> Popielniczka </option>
        <option value="loczeczko_dla_dziecka"> Łóżeczko dla dziecka </option>
        <option value="klimatyzacja"> Klimatyzacja </option>
        <option value="sniadanie_do_pokoju"> Śniadanie do pokoju </option>
    </select><br><br>


    <input type="submit" value="Zarezerwuj!">
</form>


<?php
if (isset($_POST['people']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['address']) && isset($_POST['creditcard_number']) && isset($_POST['cvv']) && isset($_POST['email']) && isset($_POST['date_from']) && isset($_POST['date_to'])) {
    $people = $_POST['people'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $creditcard = $_POST['creditcard_number'];
    $cvv = $_POST['cvv'];
    $email = $_POST['email'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $time = $_POST['time'];

    $addons = $_POST['addons'];

    echo ("<h3>Rezerwacja dokonana przez: " . $name . " " . $surname . " dla " . $people . " osób, zamieszkałego przy ulicy: " .
        $address . ".<br> Numer karty kredytowej to: " . $creditcard . " kod cvv to: " . $cvv . ".<br> Email do kontaktu: " . $email .
        ".<br> Dzień przyjazdu to: " . $date_from . " a wyjazdu to: " . $date_to . ".<br> Planowana godzina przybycia: " . $time .
        ".<br> Wybrane udogodnienia to: ");
    foreach ($addons as $option) {
        echo ($option . ", ");
    }
    echo (" </h3>");


    if ($people == 2) {
        echo ("<form action='zadanie3.php' method='post'>");
        echo ("<h2>Wypełnij dane pozostałych gości: </h2><br>
        Drugi gość: <br>");
        echo ("<label>Imię: </label><input type='text' name='name' required><br>
        <label>Nazwisko: </label><input type='text' name='surname' required><br>
        <label>Email: </label><input type='email' name='email' required><br><br>");
        echo ("<input type='submit' value='Dodaj dane gości'>
        </form>");
    } elseif ($people == 3) {
        echo ("<form action='zadanie3.php' method='post'>");
        echo ("<h2>Wypełnij dane pozostałych gości: </h2><br>
        Drugi gość: <br>");
        echo ("<label>Imię: </label><input type='text' name='name' required><br>
        <label>Nazwisko: </label><input type='text' name='surname' required><br>
        <label>Email: </label><input type='email' name='email' required><br><br>");
        echo ("Trzeci gość: <br>");
        echo ("<label>Imię: </label><input type='text' name='name' required><br>
        <label>Nazwisko: </label><input type='text' name='surname' required><br>
        <label>Email: </label><input type='email' name='email' required><br><br>");
        echo ("<input type='submit' value='Dodaj dane gości'>
        </form>");
    } elseif ($people == 4) {
        echo ("<form action='zadanie3.php' method='post'>");
        echo ("<h2>Wypełnij dane pozostałych gości: </h2><br>
        Drugi gość: <br>");
        echo ("<label>Imię: </label><input type='text' name='name' required><br>
        <label>Nazwisko: </label><input type='text' name='surname' required><br>
        <label>Email: </label><input type='email' name='email' required><br><br>");
        echo ("Trzeci gość: <br>");
        echo ("<label>Imię: </label><input type='text' name='name' required><br>
        <label>Nazwisko: </label><input type='text' name='surname' required><br>
        <label>Email: </label><input type='email' name='email' required><br><br>");
        echo ("Czwarty gość: <br>");
        echo ("<label>Imię: </label><input type='text' name='name' required><br>
        <label>Nazwisko: </label><input type='text' name='surname' required><br>
        <label>Email: </label><input type='email' name='email' required><br><br>");
        echo ("<input type='submit' value='Dodaj dane gości'>
        </form>");
    }
}