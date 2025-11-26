<?php
include 'db_connection.php';
$sql = "SELECT * FROM bilety";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php if ($result->num_rows > 0){
        echo "<table>";
        echo "<tr><th>Numer lotu</th><th>Miejsce wylotu</th><th>Miejsce przylotu</th><th>Data</th><th>Imie</th><th>Nazwisko</th><th></th><th></th></tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["Numer lotu"]. "</td>";
            echo "<td>" . $row["Miejsce wylotu"]. "</td>";
            echo "<td>" . $row["Miejsce przylotu"]. "</td>";
            echo "<td>" . $row["Data"]. "</td>";
            echo "<td>" . $row["Imie"]. "</td>";
            echo "<td>" . $row["Nazwisko"]. "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edytuj</a></td>";
            echo "<td><a href='delete.php?id=" . $row["id"] . "' >Usuń</a>  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } ?>
    <button><a href="dodaj.php">Dodaj</a></button>
</body>
</html>