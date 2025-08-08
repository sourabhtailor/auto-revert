<?php
// Upload test variation #1175
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . basename($_FILES['file']['name']));
    echo "File uploaded!";
} else {
    echo '<form method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Upload">
          </form>';
}
?>