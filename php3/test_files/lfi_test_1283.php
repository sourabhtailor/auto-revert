<?php
// LFI test variation #1283
$page = $_GET['page'] ?? 'home.php';
include($page);
?>