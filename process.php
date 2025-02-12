<?php
include 'database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee_name = $_POST['employee_name'];
    $designation = $_POST['designation'];
    $contact_number = $_POST['contact_number'];
    $email_id = $_POST['email_id'];
    $reason = $_POST['reason'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];

    $sql = "INSERT INTO requests (employee_name, designation, contact_number, email_id, reason, from_date, to_date)
            VALUES ('$employee_name', '$designation', '$contact_number', '$email_id', '$reason', '$from_date', '$to_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>