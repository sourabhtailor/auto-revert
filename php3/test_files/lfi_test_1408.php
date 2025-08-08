<?php
// LFI test variation #1408
$page = $_GET['page'] ?? 'home.php';
include($page);
?>