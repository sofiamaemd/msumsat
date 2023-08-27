<?php
// Assuming you have already established a database connection
$mysqli = new mysqli("localhost", "root", "", "login_register");

// Check if the connection was successful
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Check if the employee ID was submitted
if (isset($_POST['employee_id'])) {
    $employeeId = $_POST['employee_id'];

    // Prepare and execute the delete statement
    $stmt = $mysqli->prepare("DELETE FROM se_directory WHERE id = ?");
    $stmt->bind_param("i", $employeeId);
    if ($stmt->execute()) {
        $stmt->close();
        $mysqli->close();
        header("Location: se.php?action=deleted"); // Redirect to the specified page
        exit();
    } else {
        echo "Error deleting employee: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Employee ID not provided.";
}

$mysqli->close();
?>
