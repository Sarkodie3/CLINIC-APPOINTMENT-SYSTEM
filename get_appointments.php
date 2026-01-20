<?php
include "db.php";

$result = $conn->query("SELECT * FROM appointments ORDER BY created_at DESC");

$appointments = [];

while ($row = $result->fetch_assoc()) {
    $appointments[] = $row;
}

echo json_encode($appointments);
?>