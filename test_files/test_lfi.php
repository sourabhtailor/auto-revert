<?php
// Local File Inclusion test
$file = $_GET['page'] ?? 'default.php';
include($file);
?>