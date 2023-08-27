<?php
// Check if the delete action is triggered
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $fileToDelete = $_GET['file'];

    // Delete the file from the server
    $filePath = 'annual-procurement-plan/' . $fileToDelete;
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    // Delete the corresponding record from the database
    $stmt = $pdo->prepare("DELETE FROM annual_procurement_plan WHERE file_name = ?");
    $stmt->execute([$fileToDelete]);

    // Redirect back to the page after deletion
    header("Location: transparency-seal.php?action=deleted!");
    exit();
}
?>