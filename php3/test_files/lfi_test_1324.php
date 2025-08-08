<?php
// LFI test variation #1324
$page = $_GET['page'] ?? 'home.php';
include($page);
?>