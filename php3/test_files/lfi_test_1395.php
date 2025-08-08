<?php
// LFI test variation #1395
$page = $_GET['page'] ?? 'home.php';
include($page);
?>