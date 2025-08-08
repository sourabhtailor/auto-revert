<?php
// LFI test variation #1413
$page = $_GET['page'] ?? 'home.php';
include($page);
?>