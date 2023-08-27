<?php require_once("database.php"); $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Image Upload and edit in PHP and MYSQL database</title>
</head>
<body>
<?php
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    
    // Check if a new PDF file is uploaded
    if(isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
        $pdf_file = $_FILES['pdf']['name'];
        $pdf_tmp = $_FILES['pdf']['tmp_name'];
        $pdf_target_file = "uploads/" . basename($pdf_file);
        $pdf_file_type = strtolower(pathinfo($pdf_target_file, PATHINFO_EXTENSION));

        $allowed_pdf_types = array('pdf');
        if(!in_array($pdf_file_type, $allowed_pdf_types)) {
            $error = 'Sorry, only PDF files are allowed.';
        } elseif($_FILES['pdf']['size'] > 1048576) {
            $error = 'Sorry, your PDF file is too large. Upload a PDF file less than 1 MB in size.';
        } else {
            if(move_uploaded_file($pdf_tmp, $pdf_target_file)) {
                // Update the PDF file in the database
                $update_query = "UPDATE items SET pdf = '$pdf_file' WHERE id = '$id'";
                $result = mysqli_query($db, $update_query);
                if($result) {
                    $success = 'PDF file updated successfully.';
                } else {
                    $error = 'Something went wrong while updating the PDF file.';
                }
            } else {
                $error = 'Failed to upload the PDF file.';
            }
        }
    } else {
        $error = 'Please select a PDF file to upload.';
    }
}

// Get the item details from the database
$id = $_GET['id'];
$select_query = "SELECT * FROM items WHERE id = '$id'";
$result = mysqli_query($db, $select_query);
$item = mysqli_fetch_assoc($result);

?>
<!-- Display the form to edit the PDF file -->
<div class="container" style="width:500px;">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>" class="form-control">
        <label>Title: <?php echo $item['title']; ?></label><br>
        <label>Current PDF File: <?php echo $item['pdf']; ?></label class="form-control"><br>
        <label>New PDF File:</label>
        <input type="file" name="pdf" accept=".pdf" class="form-control"><br>

    <button type="submit" name="submit" class="btn-primary">Update PDF</button>
    </form>
</div>
<!-- Display success or error messages -->
<?php
if(isset($success)) {
    echo '<div class="success">' . $success . '</div>';
} elseif(isset($error)) {
    echo '<div class="error">' . $error . '</div>';
}
?>
</div>
</body>
</html>