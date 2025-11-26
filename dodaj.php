<?php include 'db_connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$numer_lotu = $_POST["Numer_lotu"];
$Miejsce_wylotu = $_POST["Miejsce_wylotu"];
$Miejsce_przylotu = $_POST["Miejsce_przylotu"];
$Data = $_POST["Data"];
$Imie = $_POST["Imie"];
$Nazwisko = $_POST["Nazwisko"];
$sql = "INSERT INTO bilety (`Numer lotu`, `Miejsce wylotu`, `Miejsce przylotu`, Data, `Imie`, `Nazwisko`) VALUES ('$numer_lotu', '$Miejsce_wylotu', '$Miejsce_przylotu', '$Data', '$Imie', '$Nazwisko') ";
$conn->query($sql);
header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="dodaj.php">
        <label for="Numer lotu">Numer lotu</label>
        <input type="number" name="Numer_lotu" placeholder="Numer lotu"><br>
        <label for="Miejsce wylotu">Miejsce wylotu</label>
        <input type="text" name="Miejsce_wylotu" placeholder="Miejsce wylotu"><br>Miejsce przylotu</label>
        <input type="text" name="Miejsce_przylotu" placeholder="Miejsce przylotu"><br>
        <label for="Data">Data</label>
        <input type="date" name="Data" placeholder="Data"><br>
        <label for="Imie">Imie</label>
        <input type="text" name="Imie" placeholder="Imie"><br>
        <label for="Nazwisko">Nazwisko</label>
        <input type="text" name="Nazwisko" placeholder="Nazwisko"><br>
        <input type="submit" value="Dodaj"><br>
</body>


</html>