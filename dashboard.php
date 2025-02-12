<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin.php');
    exit();
}

include 'database/db.php';

$sql = "SELECT * FROM requests";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Work from Home Requests</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Designation</th>
                <th>Contact Number</th>
                <th>Email ID</th>
                <th>Reason</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Submission Date</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['employee_name']; ?></td>
                <td><?php echo $row['designation']; ?></td>
                <td><?php echo $row['contact_number']; ?></td>
                <td><?php echo $row['email_id']; ?></td>
                <td><?php echo $row['reason']; ?></td>
                <td><?php echo $row['from_date']; ?></td>
                <td><?php echo $row['to_date']; ?></td>
                <td><?php echo $row['submission_date']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>