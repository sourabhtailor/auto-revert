<?php
// LFI test variation #1123
$page = $_GET['page'] ?? 'home.php';
include($page);
?>