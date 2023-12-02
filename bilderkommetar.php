<?php
$servername = "193.135..10.237";
$username = "db36a721f6";
$password = "jsleabod0661ue9198irbf5mlamt1vgs ";
$dbname = "deineDatenbank";

$conn = new mysqli($servername, $username, $password, $dbname);

// Teste Verbindung
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// komentare abrufen
$bild_id = $_POST['bild_id'];
$kommentar = $_POST['kommentar'];

// kommentar hinzufügen
$sql = "INSERT INTO kommentare (bild_id, kommentar) VALUES ('$bild_id', '$kommentar')";

if ($conn->query($sql) === TRUE) {
    echo "Kommentar erfolgreich gespeichert";
} else {
    echo "Fehler beim Speichern des Kommentars: " . $conn->error;
}

// Verbindung ende
$conn->close();
?>
