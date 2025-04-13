<?php
header('Content-Type: application/json');
include("database.php");

$query = "SELECT * FROM contacts";
$result = $conn->query($query);

$contacts = [];
while ($row = $result->fetch_assoc()) {
    $contacts[] = $row;
}

echo json_encode($contacts);
$conn->close();
?>