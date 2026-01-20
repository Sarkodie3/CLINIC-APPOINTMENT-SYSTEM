<?php
include "db.php";

$patient_id = $_POST['patient_id'];
$doctor_name = $_POST['doctor_name'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (patient_id, doctor_name, appointment_date, appointment_time)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $patient_id, $doctor_name, $date, $time);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}
?>