<?php require_once("database.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>File Upload in PHP and MYSQL database</title>
</head>
<body>
    <?php
        if(isset($_POST['submit']))
        {
            $image_title = $_POST['title'];
            $folder = "uploads/";

            // Image Upload
            if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image_file = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $image_target_file = $folder . basename($image_file);
                $image_file_type = strtolower(pathinfo($image_target_file, PATHINFO_EXTENSION));

                $allowed_image_types = array('jpg', 'jpeg', 'png', 'gif');
                if(!in_array($image_file_type, $allowed_image_types)) {
                    $error[] = 'Sorry, only '.implode(', ', $allowed_image_types).' files are allowed for images';
                }

                if ($_FILES['image']['size'] > 1048576) {
                    $error[] = 'Sorry, your image file is too large. Upload an image file less than 1 MB in size.';
                }

                if(!isset($error))
                {
                    move_uploaded_file($image_tmp, $image_target_file);
                    $result = mysqli_query($db, "INSERT INTO items(image, title) VALUES('$image_file', '$image_title')");
                    if(!$result)
                    {
                        echo 'Something went wrong while uploading the image.';
                    }
                }
            }

            // PDF Upload
            if(isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
                $pdf_file = $_FILES['pdf']['name'];
                $pdf_tmp = $_FILES['pdf']['tmp_name'];
                $pdf_target_file = $folder . basename($pdf_file);
                $pdf_file_type = strtolower(pathinfo($pdf_target_file, PATHINFO_EXTENSION));

                $allowed_pdf_types = array('pdf');
                if(!in_array($pdf_file_type, $allowed_pdf_types)) {
                    $error[] = 'Sorry, only '.implode(', ', $allowed_pdf_types).' files are allowed for PDFs';
                }

                if ($_FILES['pdf']['size'] > 1048576) {
                    $error[] = 'Sorry, your PDF file is too large. Upload a PDF file less than 1 MB in size.';
                }

                if(!isset($error))
                {
                    move_uploaded_file($pdf_tmp, $pdf_target_file);
                    $result = mysqli_query($db, "INSERT INTO items(image, title) VALUES('$pdf_file', '$pdf_file')");
                    if(!$result)
                    {
                        echo 'Something went wrong while uploading the PDF.';
                    }
                }
            }

            if(!isset($error))
            {
                header("location:index.php?upload_success=1");
            }
        }

        if(isset($error)){
            foreach ($error as $error) {
                echo '<div class="message">'.$error.'</div><br>';
            }
        }
    ?>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <label>PDF</label>
            <input type="file" name="pdf" class="form-control" accept=".pdf">
            <button name="submit" class="btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>
