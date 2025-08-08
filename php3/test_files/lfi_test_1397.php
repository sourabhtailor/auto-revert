<?php
// LFI test variation #1397
$page = $_GET['page'] ?? 'home.php';
include($page);
?>