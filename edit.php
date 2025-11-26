<?php
include 'db_connection.php';


$id = $_GET['id'];

$sql = "SELECT * FROM bilety WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



if($_SERVER["REQUEST_METHOD"] == "POST") {    
    $numer_lotu = $_POST["Numer_lotu"];
$Miejsce_wylotu = $_POST["Miejsce_wylotu"];
$Miejsce_przylotu = $_POST["Miejsce_przylotu"];
$Data = $_POST["Data"];
$Imie = $_POST["Imie"];
$Nazwisko = $_POST["Nazwisko"];
    $sql = "UPDATE bilety SET `Numer lotu` = '$numer_lotu', `Miejsce wylotu` = '$Miejsce_wylotu', `Miejsce przylotu` = '$Miejsce_przylotu', Data = '$Data', `Imie` = '$Imie', `Nazwisko` = '$Nazwisko' WHERE `id` = '$id'";
    echo $sql;
    mysqli_query($conn, $sql);
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
    <form method="POST" action="edit.php?id=<?php echo $id; ?>">
        <label for="Numer lotu">Numer lotu</label>
        <input type="number" name="Numer_lotu" placeholder="Numer lotu" value="<?php echo $row["Numer lotu"]; ?>"><br>
        <label for="Miejsce wylotu">Miejsce wylotu</label>
        <input type="text" name="Miejsce_wylotu" placeholder="Miejsce wylotu" value="<?php echo $row["Miejsce wylotu"]; ?>"><br>Miejsce przylotu</label>
        <input type="text" name="Miejsce_przylotu" placeholder="Miejsce przylotu" value="<?php echo $row["Miejsce przylotu"]; ?>"><br>
        <label for="Data">Data</label>
        <input type="date" name="Data" placeholder="Data" value="<?php echo $row["Data"]; ?>"><br>
        <label for="Imie">Imie</label>
        <input type="text" name="Imie" placeholder="Imie" value="<?php echo $row["Imie"]; ?>"><br>
        <label for="Nazwisko">Nazwisko</label>
        <input type="text" name="Nazwisko" placeholder="Nazwisko" value="<?php echo $row["Nazwisko"]; ?>"><br>
        <input type="submit" value="Edytuj"><br>

    </form>
</body>
</html>