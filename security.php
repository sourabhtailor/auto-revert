<?php
// Suppress errors (Security Hotspot: Hiding information)
error_reporting(0);

// Insecure file upload (CWE-434)
if (isset($_FILES['file'])) {
    $upload_dir = "uploads/";
    $upload_file = $upload_dir . basename($_FILES["file"]["name"]);

    // No file type or size validation
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $upload_file)) {
        echo "The file ". htmlspecialchars($_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "File upload failed.";
    }
}

// Local File Inclusion vulnerability (CWE-98)
if (isset($_GET['page'])) {
    include($_GET['page']); // No validation — LFI possible
}

// Dangerous use of eval() with user input (CWE-95)
if (isset($_GET['code'])) {
    eval($_GET['code']); // Executing arbitrary PHP code
}
?>
